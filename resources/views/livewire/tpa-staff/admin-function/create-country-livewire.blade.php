<div>
    <div class="card-box mb-30 p-3">
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Country') }}
        </h2>
        <p class="text-red-500">NB: all parts with * are mandatory</p>
        
        <form wire:submit.prevent = "createCountry">
            <!-- Country -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="country" :value="__('Country')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" wire:model="country" />
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4 bg-yellow-500">
                    <i class="fas fa-check px-1"></i>
                    {{ __('save') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
