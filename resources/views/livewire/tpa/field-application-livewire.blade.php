<div wire:poll>
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-user"></i> Personal Details</h3>
        <form wire:submit.prevent="submitPersonalDetails" class="space-y-4">
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

                    </span>
                    <x-select-input id="disability_status" class="block mt-1 w-full" name="disability_status"
                        wire:model="disability_status">
                        <option value="">{{ __('Select Disability Status') }}</option>
                        <option value="none">{{ __('None') }}</option>
                        <option value="disability">{{ __('Disabled') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('disability_status')" class="mt-2" />
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

                <!-- Marital Status -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="marital_status" :value="__('Marital Status')" />
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

                <!-- Professionalism Title -->
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
                </div>

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-check px-1"></i>
                    {{ __('save personal details') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <!-- Contact Details Form -->

    @if ($showContactForm == true)
        <div class="card-box mb-30 p-3" wire:poll>
            <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-address-book"></i> Contact Details
            </h3>
            <form wire:submit.prevent="submitContactDetails" class="space-y-4">
                <!-- Grid Layout for Medium and Large Screens -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- First Name -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="first_name" :value="__('First Name')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                            wire:model="first_name" disabled />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="last_name" :value="__('Last Name')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                            wire:model="last_name" disabled />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="phone_number" :value="__('Phone Number')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                            wire:model="phone_number" disabled />
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                    </div>

                    <!-- Country -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="country" :value="__('Country')" />
                            <x-mandatory-star />
                        </span>
                        <x-select-input id="country" class="block mt-1 w-full" name="country"
                            wire:model.change="country">
                            @foreach ($countries as $country)
                            <option value="">{{ __('Select Country') }}</option>
                            <!-- Add your country options here -->
                            <option value="{{ $country->id }}">{{$country->country_name }}</option>

                            @endforeach

                        </x-select-input>
                        <x-input-error :messages="$errors->get('country')" class="mt-2" />
                    </div>

                    <!-- Region -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="region" :value="__('Region')" />
                            <x-mandatory-star />
                        </span>
                        <x-select-input id="region" class="block mt-1 w-full" name="region" wire:model.change="region">
                            <option value="">-- Select Region --</option>
                            <!-- Add your region options here -->
                            @if ($region)
                            @foreach ($region as $country_region)
                            <option value="{{ $country_region->id }}">{{ $country_region->region }}</option>
                            @endforeach
                            @else

                            @endif

                        </x-select-input>

                        <x-input-error :messages="$errors->get('region')" class="mt-2" />
                    </div>

                    <!-- District -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="district" :value="__('District')" />
                            <x-mandatory-star />
                        </span>
                        <x-select-input id="district" class="block mt-1 w-full" name="district"
                            wire:model="district">
                            <option value="">-- Select District --</option>
                            @if ($region)

                            <!-- Add your district options here -->
                            @foreach ($district as $country_district)
                            <option value="{{ $country_district->id }}">{{ $country_district->district }}</option>
                            @endforeach
                            @else

                            @endif


                        </x-select-input>
                        <x-input-error :messages="$errors->get('district')" class="mt-2" />
                    </div>

                    <!-- Ward -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="district" :value="__('Ward')" />
                            <x-mandatory-star />
                        </span>
                        <x-select-input id="ward" class="block mt-1 w-full" name="ward"
                            wire:model="ward">
                            <option value="">-- Select Ward --</option>
                            <!-- Add your ward options here -->
                            @foreach ($ward as $country_ward)
                            <option value="{{ $country_ward->id }}">{{ $country_ward->ward }}</option>
                            @endforeach

                        </x-select-input>
                        <x-input-error :messages="$errors->get('ward')" class="mt-2" />
                    </div>

                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500">
                        <i class="fas fa-check px-1"></i>
                        {{ __('save contact details') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @else
    @endif

    @if ($showAcademicForm == true)
        <div class="card-box mb-30 p-3" x-data="{ showAcademicForm: @entangle('showAcademicForm') }" x-show="showAcademicForm">
            <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-graduation-cap"></i> Academic Details
            </h3>
            <form wire:submit.prevent="submitAcademicDetails" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Institute Name -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="institute_name" :value="__('Institute Name')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="institute_name" class="block mt-1 w-full" type="text"
                            name="institute_name" wire:model="institute_name" />
                        <x-input-error :messages="$errors->get('institute_name')" class="mt-2" />
                    </div>

                    <!-- Education Level -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="education_level" :value="__('Education Level')" />
                            <x-mandatory-star />
                        </span>
                        <x-select-input id="education_level" class="block mt-1 w-full" name="education_level"
                            wire:model="education_level">
                            <option value="">{{ __('Select Education Level') }}</option>
                            <option value="bachelor">{{ __('Bachelor') }}</option>
                            <option value="master">{{ __('Master') }}</option>
                            <option value="phd">{{ __('PhD') }}</option>
                        </x-select-input>
                        <x-input-error :messages="$errors->get('education_level')" class="mt-2" />
                    </div>

                    <!-- Status -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="status" :value="__('Status')" />
                            <x-mandatory-star />
                        </span>
                        <x-select-input id="status" class="block mt-1 w-full" name="status" wire:model="status">
                            <option value="">{{ __('Select Status') }}</option>
                            <option value="on_progress">{{ __('On Progress') }}</option>
                            <option value="completed">{{ __('Completed') }}</option>
                        </x-select-input>
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    </div>

                    <!-- Program -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="program" :value="__('Program')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="program" class="block mt-1 w-full" type="text" name="program"
                            wire:model="program" />
                        <x-input-error :messages="$errors->get('program')" class="mt-2" />
                    </div>

                    <!-- Registration Number -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="registration_number" :value="__('Registration Number')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="program" class="block mt-1 w-full" type="text"
                            name="registration_number" wire:model="registration_number" />
                        <x-input-error :messages="$errors->get('registration_number')" class="mt-2" />
                    </div>
                    <!-- Current Year -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="current_year" :value="__('Current Year')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="current_year" class="block mt-1 w-full" type="number" name="current_year"
                            wire:model="current_year" />
                        <x-input-error :messages="$errors->get('current_year')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500">
                        <i class="fas fa-check px-1"></i>
                        {{ __('Save Academic Details') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @else
    @endif

    @if ($showApplicationForm == true)
    <div class="card-box mb-30 p-3" x-data="{ showContactForm: @entangle('showContactForm') }" x-show="showContactForm">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-address-book"></i> Contact Details
        </h3>
        <form wire:submit.prevent="contactDetails" class="space-y-4">
            <!-- Grid Layout for Medium and Large Screens -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- First Name -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        wire:model="first_name" disabled />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        wire:model="last_name" disabled />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="phone_number" :value="__('Phone Number')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                        wire:model="phone_number" disabled />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <!-- Address -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="address" :value="__('Address')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                        wire:model="address" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- Country -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="country" :value="__('Country')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="country" class="block mt-1 w-full" name="country"
                        wire:model="country">
                        <option value="">{{ __('Select Country') }}</option>
                        <!-- Add your country options here -->
                        <option value="country1">{{ __('Country 1') }}</option>
                        <option value="country2">{{ __('Country 2') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>

                <!-- Region -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="region" :value="__('Region')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="region" class="block mt-1 w-full" name="region" wire:model="region">
                        <option value="">{{ __('Select Region') }}</option>
                        <!-- Add your region options here -->
                        <option value="region1">{{ __('Region 1') }}</option>
                        <option value="region2">{{ __('Region 2') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('region')" class="mt-2" />
                </div>

                <!-- District -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="district" :value="__('District')" />
                        <x-mandatory-star />
                    </span>
                    <x-select-input id="district" class="block mt-1 w-full" name="district"
                        wire:model="district">
                        <option value="">{{ __('Select District') }}</option>
                        <!-- Add your district options here -->
                        <option value="district1">{{ __('District 1') }}</option>
                        <option value="district2">{{ __('District 2') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('district')" class="mt-2" />
                </div>

                <!-- Ward -->
                <div>
                    <span class="flex relative top-3">
                        <x-input-label for="ward" :value="__('Ward')" />
                        <x-mandatory-star />
                    </span>
                    <x-text-input id="ward" class="block mt-1 w-full" type="text" name="ward"
                        wire:model="ward" />
                    <x-input-error :messages="$errors->get('ward')" class="mt-2" />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-check px-1"></i>
                    {{ __('apply') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    @else

    @endif
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('personalDetailsSaved', () => {
                @this.set('showContactForm', true);
            });

            Livewire.on('contactDetailsSaved', () => {
                @this.set('showAcademicForm', true);
            });

            Livewire.on('academicDetailsSaved', () => {
                @this.set('showApplicationForm', true);
            });
        });
    </script>


</div>
