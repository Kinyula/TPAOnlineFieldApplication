<div>
    <div class="card-box mb-30 p-3">
        <h2 class="text-blue-500 text-2xl"><i class="fas fa-user"></i> Update skill experience details</h2>
        <form wire:submit.prevent="updateSkillExperienceDetail" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
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

            <div class="mb-4">
                <label for="skill_level" class="block text-gray-700">Skill Level</label>
                <select id="skill_level" wire:model.defer="skill_level"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('skill_level') border-red-500 @enderror">
                    <option value="">Select Skill Level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                    <option value="expert">Expert</option>
                </select>
                @error('skill_level')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea id="description" wire:model.defer="description" placeholder="Write your skill description..."
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('description') border-red-500 @enderror"></textarea>
                @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-start mt-4">
                <x-primary-button class="bg-blue-800 flex justify-center items-center">
                    <i class="fas fa-check px-1"></i> {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </div>

</div>
