<div>
    <div class="card-box mb-30 p-3">
        @if (session()->has('message'))
            <div role="alert"
                class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <div class="flex-1">
                    <strong class="font-medium">{{ session('message') }}</strong>
                </div>
                <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                    data-bs-dismiss="alert">
                    <i class="fas fa-times w-5 h-5"></i>
                </button>
            </div>
        @endif
        <br>
        <h2 class="text-blue-500 text-2xl">
            <i class="fas fa-language"></i> Update Language Proficiency
        </h2>

        <form wire:submit.prevent="updateLanguageProficiencyDetail">
            <!-- Language Selection -->
            <div>
                <x-input-label for="language" :value="__('Language')" />
                <x-select-input id="language" class="block mt-1 w-full" name="language" wire:model="language">
                    <option value="">{{ __('Select Language') }}</option>
                    <option value="english">{{ __('English') }}</option>
                    <option value="swahili">{{ __('Swahili') }}</option>
                    <!-- Add other languages as needed -->
                </x-select-input>
                <x-input-error :messages="$errors->get('language')" class="mt-2" />
            </div>

            <!-- Language Level -->
            <div class="mb-4">
                <label for="language_level" class="block text-gray-700">Language Level</label>
                <select id="language_level" wire:model.defer="language_level"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('language_level') border-red-500 @enderror">
                    <option value="">Select Language Level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                    <option value="expert">Expert</option>
                </select>
                @error('language_level')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <!-- Submit Button -->
            <div class="flex items-center justify-start mt-4">
                <x-primary-button class="bg-blue-800">
                    <i class="fas fa-check px-1"></i> {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
