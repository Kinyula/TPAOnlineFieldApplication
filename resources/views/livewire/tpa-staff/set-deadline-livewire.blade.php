<div>
    <div class="card-box p-4">
        <h3 class="text-2xl font-bold mb-4 text-yellow-500">
            <i class="fas fa-calendar-alt"></i>
            @if ($isUpdating)
                Update Intern Application Deadline
            @else
                Set Intern Application Deadline
            @endif
        </h3>

        @if (session()->has('message'))
            <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <strong class="font-medium">{{ session('message') }}</strong>
            </div>
        @endif

        @if (session()->has('update'))
            <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <strong class="font-medium">{{ session('update') }}</strong>
            </div>
        @endif

        <form wire:submit.prevent="saveOrUpdateDeadline" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Module Selection -->
            <div class="mb-4">
                <x-input-label for="module" :value="__('Select Module')" />
                <x-select-input id="module" class="block mt-1 w-full" wire:model="module">
                    <option value="">{{ __('Select Module') }}</option>
                    @foreach ($modules as $module)
                        <option value="{{ $module->id }}">{{ $module->module_name }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('module')" class="mt-2" />
            </div>

            <!-- Deadline Date Picker -->
            <div class="mb-4">
                <x-input-label for="deadline" :value="__('Set Deadline')" />
                <input id="deadline" type="date" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"
                    wire:model="deadline">
                <x-input-error :messages="$errors->get('deadline')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                    <i class="fas fa-save px-1"></i>
                    {{ $isUpdating ? __('Update Deadline') : __('Save Deadline') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
