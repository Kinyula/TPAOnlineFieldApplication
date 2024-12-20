<div>

    @if ($data)

        @livewire('student.student-files.edit-student-detail-files.edit-academic-details-livewire')
    @else
        <div class="card-box mb-30 p-3">
            <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-graduation-cap"></i> Academic Details
            </h3>
            @if (session()->has('academic'))
                <div role="alert"
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session('academic') }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif
            <form wire:submit.prevent="submitAcademicDetails" class="space-y-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Institute Name -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="institute_name" :value="__('Institute Name')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="institute_name" class="block mt-1 w-full" type="text" name="institute_name"
                            wire:model="institute_name" />
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
                            <option value="">{{ __('Select Year of Study') }}</option>
                            <option value="first year">{{ __('First year') }}</option>
                            <option value="second year">{{ __('Second year') }}</option>
                            <option value="third year">{{ __('Third year') }}</option>
                            <option value="fourth year">{{ __('Fourth year') }}</option>
                            <option value="other">{{ __('Other') }}</option>
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
                        <x-text-input id="registration_number" class="block mt-1 w-full" type="text"
                            name="registration_number" wire:model="registration_number" />
                        <x-input-error :messages="$errors->get('registration_number')" class="mt-2" />
                    </div>
                    <!-- Current Year -->
                    <div>
                        <span class="flex relative top-3">
                            <x-input-label for="current_year" :value="__('Year')" />
                            <x-mandatory-star />
                        </span>
                        <x-text-input id="current_year" class="block mt-1 w-full" type="number" name="current_year"
                            wire:model="current_year" />
                        <x-input-error :messages="$errors->get('current_year')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                        <i class="fas fa-check px-1"></i>
                        {{ __('Save Academic Details') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endif


</div>
