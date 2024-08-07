<div>
    <div class="card-box mb-30 p-3">
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Region') }}
        </h2>
        <form wire:submit.prevent = "createRegion">

            <!-- Country -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="country" :value="__('Country')" />
                    <x-mandatory-star />
                </span>
                <x-select-input id="country" class="block mt-1 w-full" name="country" wire:model="country">
                    <option value="">-- Select Country --</option>
                    @foreach ($countries as $country)

                        <!-- Add your country options here -->
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach

                </x-select-input>
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>
            <!-- Region -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="region" :value="__('Region')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="region" class="block mt-1 w-full" type="text" name="region"
                    wire:model="region" />
                <x-input-error :messages="$errors->get('region')" class="mt-2" />
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
