<div class="container mx-auto">
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">
            <i class="fas fa-briefcase px-1"></i>Application form
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
        <br>
        <form wire:submit.prevent="submitPortApplication" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Department Selection -->
            <div>
                <x-input-label for="module" :value="__('Select Department')" />
                <x-select-input id="module" class="block mt-1 w-full" name="department" wire:model.change="department">
                    <option value="">{{ __('Select Department') }}</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('department')" class="mt-2" />
            </div>
            <!-- Module Selection -->
            <div>
                <x-input-label for="module" :value="__('Select Module')" />
                <x-select-input id="module" class="block mt-1 w-full" name="module" wire:model.change="module">
                    <option value="">{{ __('Select Module') }}</option>
                    @foreach ($modules as $module)
                        <option value="{{ $module->id }}">{{ $module->module_name }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('module')" class="mt-2" />
            </div>

            <!-- Sub Module Selection -->
            <div>
                <x-input-label for="sub_module" :value="__('Select Sub Module')" />
                <x-select-input id="sub_module" class="block mt-1 w-full" name="sub_module" wire:model="sub_module">
                    <option value="">{{ __('Select Sub Module') }}</option>
                    @foreach ($subModules as $subModule)
                        <option value="{{ $subModule->id }}">{{ $subModule->sub_module }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('sub_module')" class="mt-2" />
            </div>

            <!-- Port Selection -->
            <div>
                <x-input-label for="port" :value="__('Select Port')" />
                <x-select-input id="port" class="block mt-1 w-full" name="port" wire:model="port">
                    <option value="">{{ __('Select Port') }}</option>
                    @foreach ($ports as $port)
                        <option value="{{ $port->id }}">{{ $port->port_name }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('port')" class="mt-2" />
            </div>

            <!-- Application Letter -->
            <div class="sm:col-span-2 lg:col-span-3">
                <x-input-label for="application_letter" :value="__('Application Letter')" />
                <input id="application_letter"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    type="file" name="application_letter" wire:model="application_letter">
                <x-input-error :messages="$errors->get('application_letter')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4 sm:col-span-2 lg:col-span-3">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-save px-1"></i> {{ __('Submit Application') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
