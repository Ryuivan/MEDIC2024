<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Contact;
use App\Models\User;

class ProfileController extends Controller
{
    public function index() 
    {
        return view('profile.index', [
            'title' => 'Accounts',
            'notification' => Contact::where('status', 'Pending')->get(),
            'pendings' => Contact::where('status', 'Pending')->get(),  
            'accounts' => User::paginate(5)
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
            'title' => 'Profile'
        ]);
    }

    public function edit_admin(Request $request): View
    {
        return view('profile.edit_admin', [
            'user' => User::findOrFail($request->id),
            'title' => User::findOrFail($request->id)->first_name,
            'notification' => Contact::where('status', 'Pending')->get(),
            'pendings' => Contact::where('status', 'Pending')->get(),  
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email,' . $request->user()->id, 'ends_with:student.umn.ac.id'],
        ]);

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'Your profile has been updated');
    }

    public function update_admin(Request $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $request->validate([
            'email' => ['required', 'email', 'unique:users,email,' . $user->id, 'ends_with:student.umn.ac.id'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'status' => ['required', 'boolean'],
        ]);

        $user->email = $request->input('email');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->is_admin = $request->input('status');
        
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.index', $user->id)->with('status', $user->first_name . ' has been updated!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroy_admin(Request $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $user->delete();

        return Redirect::route('profile.index')->with('status', $user->first_name . ' has been deleted!');
    }
}
