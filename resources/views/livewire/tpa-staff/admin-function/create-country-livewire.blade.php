<div>
    <div class="card-box mb-30 p-3">
        @if (session()->has('country'))
            <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <strong class="font-medium">{{ session('country') }}</strong>
            </div>
        @endif
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Country') }}
        </h2>
        <p class="text-red-500">NB: all parts with * are mandatory</p>

        <form action="" wire:submit.prevent = "importCountries" class="flex">
            <x-file-input id="" class="block mt-1 w-full" type="text" name="country"
            wire:model="countries" />
        <x-input-error :messages="$errors->get('countries')" class="mt-2" />

            <x-primary-button class="ms-4 bg-yellow-500 flex justify-center items-center">
                <i class="fas fa-check px-1"></i>
                {{ __('import') }}
            </x-primary-button>
        </form>
        <form wire:submit.prevent = "createCountry" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Country -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="country" :value="__('Country')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="country" class="block mt-1 w-full" type="text" name="country"
                    wire:model="country" />
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500 flex justify-center item">
                    <i class="fas fa-check px-1"></i>
                    {{ __('save') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
