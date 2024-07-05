<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Inspiring;
use App\Models\Contact;

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About'
    ]);
})->name('about');

Route::get('/proker', function () {
    $rutin = [
        [
            'img' => 'assets/proker/pelatihan.png',
            'alt' => 'Pelatihan Icon',
            'title' => 'Pelatihan',
            'description' => 'Pelatihan untuk anggota UMN Medical Center.'
        ],
        [
            'img' => 'assets/proker/Piket.png',
            'alt' => 'Piket Icon',
            'title' => 'Piket',
            'description' => 'Senin-Jumat (08.00-17.00)<br />Sabtu (08.00-11.00)'
        ],
        [
            'img' => 'assets/proker/Meeting.png',
            'alt' => 'Meeting Icon',
            'title' => 'Rapat',
            'description' => 'Update dan evaluasi kinerja setiap anggota'
        ],
        [
            'img' => 'assets/proker/Pengajuan jasa.png',
            'alt' => 'Pengajuan Jasa Icon',
            'title' => 'Pengajuan jasa',
            'description' => 'Pengajuan jasa dari pihak UMN Medical Center'
        ],
    ];

    $unggulan = [
        [
            'img' => 'assets/proker/Apresiasi.png',
            'alt' => 'Apresiasi Icon',
            'title' => 'Apresiasi',
            'description' => 'Wujud terima kasih dan penghargaan bagi anggota UMN Medical Center',
        ],
        [
            'img' => 'assets/proker/Identitas.png',
            'alt' => 'Identitas Icon',
            'title' => 'Identity',
            'description' => 'Kartu tanda pengenal untuk anggota UMN Medical Center',
        ],
        [
            'img' => 'assets/proker/alive.png',
            'alt' => 'Alive Icon',
            'title' => 'Alive',
            'subtitle' => 'Skin Health',
            'description' => 'Kegiatan tahunan yang membahas tentang kesehatan',
        ],
        [
            'img' => 'assets/proker/Cek kesehatan.png',
            'alt' => 'Cek Kesehatan Icon',
            'title' => 'Cek Kesehatan',
            'description' => 'Membuka kolaborasi dengan pihak eskternal untuk cek kesehatan',
        ],
        [
            'img' => 'assets/proker/Pelatihan civitas umn.png',
            'alt' => 'Pelatihan Medis Civitas UMN Icon',
            'title' => 'Pelatihan Civitas UMN',
            'description' => 'Pelatihan medis dan alat kesehatan untuk civitas UMN',
        ],
        [
            'img' => 'assets/proker/Bonding.png',
            'alt' => 'Bonding Icon',
            'title' => 'Bonding',
            'description' => 'Memperkuat tali kekeluargaan UMN Medical Center',
        ],
    ];

    return view('pages.proker', [
        'title' => 'Program Kerja',
        'rutin' => $rutin,
        'unggulan' => $unggulan
    ]);
})->name('proker');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/form', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/form', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

Route::get('/gallery', [GalleryController::class, 'user_index'])->name('gallery.user_index');
Route::get('/gallery/{category:slug}', [GalleryController::class, 'user_show'])->name('gallery.user_show');

Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('dashboard/account', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('dashboard/account/{id}', [ProfileController::class, 'edit_admin'])->name('profile.edit_admin');
    Route::put('dashboard/account/{id}', [ProfileController::class, 'update_admin'])->name('profile.update_admin');
    Route::delete('dashboard/account/{id}', [ProfileController::class, 'destroy_admin'])->name('profile.destroy_admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'quote' => Inspiring::quote(),
            'pengajuans' => Contact::limit(10)->orderByDesc('id')->get(),
            'pendings' => Contact::where('status', 'Pending')->get(),
            'notification' => Contact::where('status', 'Pending')->get(),
        ]);
    })->name('dashboard');

    Route::get('/dashboard/services', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/dashboard/services/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/dashboard/services/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/dashboard/services/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::resource('/dashboard/category', CategoryController::class);

    Route::resource('/dashboard/gallery', GalleryController::class);
    Route::post('/dashboard/gallery/upload', [GalleryController::class, 'upload'])->name('gallery.upload');
});

require __DIR__ . '/auth.php';
