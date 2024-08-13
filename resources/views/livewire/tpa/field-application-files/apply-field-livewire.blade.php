<div>
    <div class="card-box mb-30 p-3">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">
            <i class="fas fa-briefcase"></i> Port Selection and Application
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
        <form wire:submit.prevent="submitPortApplication">
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
            <div>
                <x-input-label for="application_letter" :value="__('Application Letter')" />
                <input id="application_letter"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    type="file" name="application_letter" wire:model="application_letter">
                <x-input-error :messages="$errors->get('application_letter')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-save px-1"></i> {{ __('Submit Application') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
