<div>
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">
            <i class="fas fa-briefcase"></i> Working Experience
        </h3>
        @if (session()->has('experience'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('experience') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif
        <form wire:submit.prevent = "submitWorkingExperience" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Institution Name -->
            <div class="mt-4">
                <x-input-label for="institution_name" :value="__('Institution Name')" />
                <x-text-input id="institution_name" class="block mt-1 w-full" type="text" name="institution_name" wire:model="institution_name" />
                <x-input-error :messages="$errors->get('institution_name')" class="mt-2" />
            </div>

            <!-- Institution Address -->
            <div class="mt-4">
                <x-input-label for="institution_address" :value="__('Institution Address')" />
                <x-text-input id="institution_address" class="block mt-1 w-full" type="text" name="institution_address" wire:model="institution_address" />
                <x-input-error :messages="$errors->get('institution_address')" class="mt-2" />
            </div>

            <!-- Job Title -->
            <div class="mt-4">
                <x-input-label for="job_title" :value="__('Job Title')" />
                <x-text-input id="job_title" class="block mt-1 w-full" type="text" name="job_title" wire:model="job_title" />
                <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
            </div>

            <!-- Current Occupation Checkbox -->
            <div class="mt-4 flex items-center">
                <input id="current_occupation" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" wire:model="current_occupation">
                <label for="current_occupation" class="ml-2 text-sm text-gray-600">{{ __('Current Occupation') }}</label>
            </div>

            <!-- Start Date -->
            <div class="mt-4">
                <x-input-label for="start_date" :value="__('Start Date')" />
                <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" wire:model="start_date" />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>

            <!-- Duties Performed -->
            <div class="mt-4">
                <x-input-label for="duties_performed" :value="__('Duties Performed')" />
                <textarea id="duties_performed" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="duties_performed" wire:model="duties_performed"></textarea>
                <x-input-error :messages="$errors->get('duties_performed')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                    <i class="fas fa-save px-1"></i> {{ __('Save Working Experience') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>
