<div>

    @if ($data)
        <!-- Placeholder Card Message -->
        {{-- <div x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300"
            class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">You’ve already filled the skill experience
                    details!
                </h2>
                <p class="text-gray-500">Complete at least 50% of the application to unlock the final step.</p>
                <p class="text-gray-600">Keep going, you're doing great!</p>
                <div
                    class="inline-flex items-center px-4 py-2 bg-blue-800 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition ease-in-out duration-300">
                    <i class="fas fa-spinner animate-spin mr-2"></i> Keep Filling Out the Forms
                </div>
            </div>
        </div> --}}
        @livewire('student.student-files.edit-student-detail-files.edit-skill-experience-details-livewire')
    @else
        <div class="card-box mb-30 p-3">
            <h3 class="text-2xl font-bold mb-3 text-yellow-500">
                <i class="fas fa-briefcase"></i> Skill Experience
            </h3>
            @if (session()->has('success'))
                <div role="alert"
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session('success') }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif
            <form wire:submit.prevent = "submitSkillExperience">
                <!-- Skill Experience Category -->
                <div>
                    <x-input-label for="skill_category" :value="__('Skill Category')" />
                    <x-select-input id="skill_category" class="block mt-1 w-full" name="skill_category"
                        wire:model="skill_category">
                        <option value="">{{ __('Select Skill Category') }}</option>
                        <option value="data_analysis">{{ __('Data Analysis') }}</option>
                        <option value="networking">{{ __('Networking') }}</option>
                        <option value="graphics_and_design">{{ __('Graphics and Design') }}</option>
                        <option value="security">{{ __('Security') }}</option>
                        <option value="animation">{{ __('Animation') }}</option>
                        <option value="software_development">{{ __('Software Development') }}</option>
                        <option value="mobile_application">{{ __('Mobile Application') }}</option>
                        <option value="marketing">{{ __('Marketing') }}</option>
                        <option value="projects">{{ __('Projects') }}</option>
                        <option value="business_analysis">{{ __('Business Analysis') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('skill_category')" class="mt-2" />
                </div>

                <!-- Skill Level -->
                <div>
                    <x-input-label for="skill_level" :value="__('Skill Level')" />
                    <x-select-input id="skill_level" class="block mt-1 w-full" name="skill_level"
                        wire:model="skill_level">
                        <option value="">{{ __('Select Skill Level') }}</option>
                        <option value="beginner">{{ __('Beginner') }}</option>
                        <option value="intermediate">{{ __('Intermediate') }}</option>
                        <option value="advanced">{{ __('Advanced') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('skill_level')" class="mt-2" />
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description"
                        class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        name="description" wire:model="description"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                        <i class="fas fa-save px-1"></i> {{ __('Save Skill Experience Details') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endif

</div>
