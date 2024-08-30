<div>
    <div class="card-box mb-30 p-3">
        @if (session()->has('region'))
            <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <strong class="font-medium">{{ session('region') }}</strong>
            </div>
        @endif
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Region') }}
        </h2>
        <p class="text-red-500">NB: all parts with * are mandatory</p>

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
