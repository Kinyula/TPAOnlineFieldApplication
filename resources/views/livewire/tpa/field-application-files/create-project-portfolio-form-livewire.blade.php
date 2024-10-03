<div>

    @if ($data)
        @livewire('student.student-files.edit-student-detail-files.edit-project-portfolio-details-livewire')
    @else
        <div class="card-box mb-30 p-3">
            <h3 class="text-2xl font-bold mb-3 text-yellow-500">
                <i class="fas fa-briefcase"></i> Project Details
            </h3>
            @if (session()->has('project'))
                <div
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session('project') }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif
            <form wire:submit.prevent = "submitProjectPortfolio">
                <!-- Project Name -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="col-span-1 sm:col-span-3">
                        <x-input-label for="project_name" :value="__('Project Name')" />
                        <x-text-input id="project_name" class="block mt-1 w-full" type="text" name="project_name"
                            wire:model="project_name" />
                        <x-input-error :messages="$errors->get('project_name')" class="mt-2" />
                    </div>
                </div>

                <!-- Start Date and End Date -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
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

                <!-- Project URL -->
                <div class="mt-4">
                    <x-input-label for="project_url" :value="__('Project URL')" />
                    <x-text-input id="project_url" class="block mt-1 w-full" type="url" name="project_url"
                        wire:model="project_url" />
                    <x-input-error :messages="$errors->get('project_url')" class="mt-2" />
                </div>

                <!-- Description -->
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description"
                        class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        name="description" wire:model="description"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4 bg-yellow-500">
                        <i class="fas fa-save px-1"></i> {{ __('Save Project Details') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endif



</div>
