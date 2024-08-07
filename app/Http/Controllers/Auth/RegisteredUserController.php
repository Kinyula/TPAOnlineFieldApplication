<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone_number' => ['required', 'string', 'max:255', 'regex:/^\+?[0-9]{7,15}$/'],
            'gender' => ['required', 'string', 'max:255', 'in:male,female'],
            'password' => ['required', 'confirmed'],
            // 'profile_image' => ['required', 'image']

        ]);

        $users = new User();
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->email = $request->input('email');
        $users->phone_number = $request->input('phone_number');
        $users->gender = $request->input('gender');
        $users->password = Hash::make($request->input('password'));


        if ($request->hasFile('profile_image')) {
            $profile_image =  $users->profile_image = $request->file('profile_image')->store('public/profile_images') ?? NULL;

            $profile_image = explode('/', $profile_image);
            $profile_image = $profile_image[2];
            $users->profile_image = $profile_image;
        } else {
            $users->profile_image = 'user3.png';
        }

        $users->save();

        Alert::success('success', 'Registered successfully');

        return redirect(route('dashboard', absolute: false));
    }
}
