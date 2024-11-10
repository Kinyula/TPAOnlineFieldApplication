<div>

    @if ($data)
        <!-- Placeholder Card Message -->
        {{-- <div x-transition:enter="transition-opacity duration-300"
            x-transition:leave="transition-opacity duration-300"
            class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">You’ve already filled the personal details!</h2>
                <p class="text-gray-500">Complete at least 50% of the application to unlock the final step.</p>
                <p class="text-gray-600">Keep going, you're doing great!</p>
                <div class="inline-flex items-center px-4 py-2 bg-blue-800 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition ease-in-out duration-300">
                    <i class="fas fa-spinner animate-spin mr-2"></i> Keep Filling Out the Forms
                </div>
            </div>
        </div> --}}
        @livewire('student.student-files.edit-student-detail-files.edit-personal-details-livewire')
    @else
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-user"></i> Personal Details</h3>
        @if (session()->has('personal'))
            <div role="alert"
                class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <div class="flex-1">
                    <strong class="font-medium">{{ session('personal') }}</strong>
                </div>
                <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                    data-bs-dismiss="alert">
                    <i class="fas fa-times w-5 h-5"></i>
                </button>
            </div>
        @endif
        <form wire:submit.prevent="submitPersonalDetails" class="space-y-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Grid Layout for Medium and Large Screens -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- First Name -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        wire:model="first_name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        wire:model="last_name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        wire:model="email" autocomplete="username"
                        placeholder="Your email should be like this eg. name@gmail.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="phone_number" :value="__('Phone Number')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                        wire:model="phone_number" autocomplete="phone_number"
                        placeholder="Your phone number should be like this 0xxxxxxxx" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <!-- Gender -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="gender" :value="__('Gender')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="gender" class="block mt-1 w-full" name="gender" wire:model="gender">
                        <option value="">{{ __('Select Gender') }}</option>
                        <option value="male">{{ __('Male') }}</option>
                        <option value="female">{{ __('Female') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>

                <!-- Date of Birth -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                        wire:model="date_of_birth" />
                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                </div>

                <!-- Disability Status -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="disability_status" :value="__('Disability Status')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="disability_status" class="block mt-1 w-full" name="disability_status"
                        wire:model="disability_status">
                        <option value="">{{ __('Select Disability Status') }}</option>
                        <option value="none">{{ __('None') }}</option>
                        <option value="disability">{{ __('Disabled') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('disability_status')" class="mt-2" />
                </div>


                <!-- Marital Status -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="marital_status" :value="__('Marital Status')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="marital_status" class="block mt-1 w-full" name="marital_status"
                        wire:model="marital_status">
                        <option value="">{{ __('Select Marital Status') }}</option>
                        <option value="single">{{ __('Single') }}</option>
                        <option value="married">{{ __('Married') }}</option>
                        <option value="divorced">{{ __('Divorced') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('marital_status')" class="mt-2" />
                </div>

                <!-- NIDA Number -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="nida_number" :value="__('NIDA Number')" />

                    </span>
                    <x-text-input id="nida_number" class="block mt-1 w-full" type="text" name="nida_number"
                        wire:model="nida_number" />
                    <x-input-error :messages="$errors->get('nida_number')" class="mt-2" />
                </div>



                {{-- <!-- Professionalism Title -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="professionalism_title" :value="__('Professionalism Title')" />

                    </span>
                    <x-text-input id="professionalism_title" class="block mt-1 w-full" type="text"
                        name="professionalism_title" wire:model="professionalism_title" />
                    <x-input-error :messages="$errors->get('professionalism_title')" class="mt-2" />
                </div>

                <!-- Designation -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="designation" :value="__('Designation')" />

                    </span>
                    <x-text-input id="designation" class="block mt-1 w-full" type="text" name="designation"
                        wire:model="designation" />
                    <x-input-error :messages="$errors->get('designation')" class="mt-2" />
                </div>

                <!-- Years of Experience -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="years_of_experience" :value="__('Years of Experience')" />
                    </span>
                    <x-text-input id="years_of_experience" class="block mt-1 w-full" type="number"
                        name="years_of_experience" wire:model="years_of_experience" />
                    <x-input-error :messages="$errors->get('years_of_experience')" class="mt-2" />
                </div> --}}

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                    <i class="fas fa-check px-1"></i>
                    {{ __('save personal details') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    @endif


</div>
