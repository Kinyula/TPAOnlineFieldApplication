<div>
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">
            <i class="fas fa-chalkboard-teacher"></i> Training and Workshop
        </h3>
        <form>
            <!-- Training Name -->
            <div class="mt-4">
                <x-input-label for="training_name" :value="__('Training Name')" />
                <x-text-input id="training_name" class="block mt-1 w-full" type="text" name="training_name"
                    wire:model="training_name" />
                <x-input-error :messages="$errors->get('training_name')" class="mt-2" />
            </div>

            <!-- Training Institution -->
            <div class="mt-4">
                <x-input-label for="training_institution" :value="__('Training Institution')" />
                <x-text-input id="training_institution" class="block mt-1 w-full" type="text"
                    name="training_institution" wire:model="training_institution" />
                <x-input-error :messages="$errors->get('training_institution')" class="mt-2" />
            </div> 

            <!-- Training Certificate (File Upload) -->
            <div class="mt-4">
                <x-input-label for="training_certificate" :value="__('Training Certificate')" />
                <x-file-input id="training_certificate" class="block mt-1 w-full" name="training_certificate"
                    wire:model="training_certificate" />
                <x-input-error :messages="$errors->get('training_certificate')" class="mt-2" />
            </div>

            <!-- Start Date and End Date (Grid Layout) -->
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Start Date -->
                <div>
                    <x-input-label for="start_date" :value="__('Start Date')" />
                    <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date"
                        wire:model="start_date" />
                    <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                </div>

                <!-- End Date -->
                <div>
                    <x-input-label for="end_date" :value="__('End Date')" />
                    <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date"
                        wire:model="end_date" />
                    <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                </div>
            </div>

            <!-- Training Description -->
            <div class="mt-4">
                <x-input-label for="training_description" :value="__('Training Description')" />
                <textarea id="training_description"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    name="training_description" wire:model="training_description"></textarea>
                <x-input-error :messages="$errors->get('training_description')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-save px-1"></i> {{ __('Save Training and Workshop') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>
