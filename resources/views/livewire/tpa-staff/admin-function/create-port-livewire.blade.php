<div>
    <div class="card-box mb-30 p-3">
        @if (session()->has('port'))
        <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <strong class="font-medium">{{ session('port') }}</strong>
        </div>
    @endif
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Port') }}
        </h2>
        <p class="text-red-500">NB: all parts with * are mandatory</p>

        <form wire:submit.prevent = "createPort" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Country -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="port" :value="__('Port')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="port" class="block mt-1 w-full" type="text" name="port" wire:model="port" />
                <x-input-error :messages="$errors->get('port')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                    <i class="fas fa-check px-1"></i>
                    {{ __('save') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
