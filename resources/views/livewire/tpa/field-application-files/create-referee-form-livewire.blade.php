<div>
    @if ($data)
        @livewire('student.student-files.edit-student-detail-files.edit-referee-details-livewire')
    @else
        <div class="card-box mb-30 p-3">
            <h3 class="text-2xl font-bold mb-3 text-yellow-500">
                <i class="fas fa-user-tie"></i> Referee Details
            </h3>
            @if (session()->has('referee'))
                <div role="alert"
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session('referee') }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif
            <form wire:submit.prevent = "submitRefereeDetails">
                <!-- First Name -->
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" name="first_name" wire:model="first_name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" name="last_name" wire:model="last_name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" type="email" class="block mt-1 w-full" name="email"
                        wire:model="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div class="mt-4">
                    <x-input-label for="phone_number" :value="__('Phone Number')" />
                    <x-text-input id="phone_number" class="block mt-1 w-full" name="phone_number"
                        wire:model="phone_number" />
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

                <!-- Occupation -->
                <div class="mt-4">
                    <x-input-label for="occupation" :value="__('Occupation')" />
                    <x-text-input id="occupation" class="block mt-1 w-full" name="occupation" wire:model="occupation" />
                    <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                </div>

                <!-- Institute Name -->
                <div class="mt-4">
                    <x-input-label for="institute_name" :value="__('Institute Name')" />
                    <x-text-input id="institute_name" class="block mt-1 w-full" name="institute_name"
                        wire:model="institute_name" />
                    <x-input-error :messages="$errors->get('institute_name')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                        <i class="fas fa-save px-1"></i> {{ __('Save Referee Details') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endif


</div>
