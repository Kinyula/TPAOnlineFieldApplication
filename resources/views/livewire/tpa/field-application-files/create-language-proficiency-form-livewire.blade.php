<div>

    @if ($data)
        <!-- Placeholder Card Message -->
        {{-- <div x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300"
            class="flex items-center justify-center p-6 bg-white shadow-md rounded-lg border border-gray-200 mt-8 mx-4">
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-gray-700 animate-pulse">You’ve already filled the language
                    profiency
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
        @livewire('student.student-files.edit-student-detail-files.edit-language-proficiency-livewire')
    @else
        <div class="card-box mb-30 p-3">
            <h3 class="text-2xl font-bold mb-3 text-yellow-500">
                <i class="fas fa-language"></i> Language Proficiency
            </h3>
            @if (session()->has('language'))
                <div role="alert"
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session('language') }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif
            <form wire:submit.prevent = "submitLanguageProficiency" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Language Name -->
                <div class="mt-4">
                    <x-input-label for="language_name" :value="__('Language Name')" />
                    <x-select-input id="language_name" class="block mt-1 w-full" name="language_name"
                        wire:model="language_name">
                        <option value="">{{ __('Select Language') }}</option>
                        <option value="english">{{ __('English') }}</option>
                        <option value="swahili">{{ __('Swahili') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('language_name')" class="mt-2" />
                </div>

                <!-- Language Level -->
                <div class="mt-4">
                    <x-input-label for="language_level" :value="__('Language Level')" />
                    <x-select-input id="language_level" class="block mt-1 w-full" name="language_level"
                        wire:model="language_level">
                        <option value="">{{ __('Select Language Level') }}</option>
                        <option value="native">{{ __('Native') }}</option>
                        <option value="intermediate">{{ __('Intermediate') }}</option>
                        <option value="advanced">{{ __('Advanced') }}</option>
                    </x-select-input>
                    <x-input-error :messages="$errors->get('language_level')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                        <i class="fas fa-save px-1"></i> {{ __('Save Language Proficiency') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endif



</div>
