<div>
    <div class="card-box mb-30 p-3">
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add District') }}
        </h2>
        <p class="text-red-500">NB: all parts with * are mandatory</p>
        
        <form wire:submit.prevent = "createDistrict">
                        <!-- Region -->
                        <div>
                            <span class="flex relative top-3">
                                <x-input-label for="region" :value="__('Region')" />
                                <x-mandatory-star />
                            </span>
                            <x-select-input id="region" class="block mt-1 w-full" name="region" wire:model="region">
                                <option value="">-- Select Region --</option>
                                @foreach ($regions as $region)
                                    <!-- Add your region options here -->
                                    <option value="{{ $region->id }}">{{ $region->region }}</option>
                                @endforeach

                            </x-select-input>
                            <x-input-error :messages="$errors->get('region')" class="mt-2" />
                        </div>

            <!-- District -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="country" :value="__('District')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="country" class="block mt-1 w-full" type="text" name="district" wire:model="district" />
                <x-input-error :messages="$errors->get('district')" class="mt-2" />
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
