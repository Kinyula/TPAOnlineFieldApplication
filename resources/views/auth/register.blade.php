<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <span class="flex relative top-4">
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-mandatory-star />
            </span>

            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div>
            <span class="flex relative top-4">
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-mandatory-star />
            </span>

            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <span class="flex relative top-4">
                <x-input-label for="phone_number" :value="__('Phone Number')" />
                <x-mandatory-star />
            </span>

            <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                :value="old('phone_number')" autocomplete="phone_number"
                placeholder="Your phone number should be like this 0xxxxxxxx" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>



        <!-- Email Address -->
        <div class="mt-4">
            <span class="flex relative top-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-mandatory-star />
            </span>

            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                autocomplete="username" placeholder="Your email should be like this eg. name@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 relative">
            <span class="flex items-center mb-1">
                <x-input-label for="password" :value="__('Password')" class="text-lg font-semibold text-gray-700" />
                <x-mandatory-star />
            </span>

            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full pr-12 border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 rounded-md shadow-sm" type="password" name="password" autocomplete="new-password" />

                <div class="absolute inset-y-0 right-0 me-2 pr-4 flex items-center text-gray-500">
                    <i id="togglePassword" class="fas fa-eye cursor-pointer"></i>
                </div>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
        </div>







        <!-- Confirm Password -->
        <div class="mt-4">
            <span class="flex relative top-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-mandatory-star />
            </span>


            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Gender -->

        <div class="mt-4">
            <span class="flex relative top-4">
                <x-input-label for="gender" :value="__('Gender')" />
                <x-mandatory-star />
            </span>

            <x-select-input id="gender" class="block mt-1 w-full" name="gender">
                <option value="">{{ __('Select Gender') }}</option>
                <option value="male">{{ __('Male') }}</option>
                <option value="female">{{ __('Female') }}</option>
            </x-select-input>

            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        {{-- Profile picture --}}
        <div class="mt-4">
            <x-input-label for="profile_picture" :value="__('Profile picture/Optional')" />

            <x-text-input id="profile_image" class="block mt-1 w-full" type="file" name="profile_image" />

            <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                <i class="fas fa-user-plus px-1"></i>
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
