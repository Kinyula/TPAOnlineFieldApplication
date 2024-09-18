<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => [
                'required',
                'string',
                'in:male,female,other', // Replace with allowed gender values
                'max:255',
            ],

            'phone_number' => [
                'required',
                'string',
                'max:15', // Adjust the max length as per your needs (e.g., international phone numbers)
                'regex:/^\+?[0-9]{7,15}$/', // Allows optional '+' at the start, followed by 7 to 15 digits
            ],

            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],

        ]);

        $users = User::findOrFail($id);

        $users->first_name = $request->input('first_name');

        $users->last_name = $request->input('last_name');

        $users->email = $request->input('email');

        $users->gender = $request->input('gender');

        $profile_image = auth()->user()->profile_image;


        if (File::exists(public_path('storage/profile_images/' . $profile_image))) {

            File::delete(public_path('storage/profile_images/' . $profile_image));
        }

        if ($request->hasFile('profile_image')) {
            $profile_image =  $users->profile_image = $request->file('profile_image')->store('public/profile_images') ?? NULL;

            $profile_image = explode('/', $profile_image);
            $profile_image = $profile_image[2];
            $users->profile_image = $profile_image;
        } else {
            $users->profile_image = 'user3.png';
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $users->update();

        Alert::success('success', 'Profile updated successfully');
        return Redirect::route('profile.edit', ['id' => $users->id])->with('status', 'profile-updated');
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
}
