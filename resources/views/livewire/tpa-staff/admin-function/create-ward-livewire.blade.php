<div>
    <div class="card-box mb-30 p-3">
        <h2>
            <i class="fas fa-plus"></i>
            {{ __('Add Ward') }}
        </h2>
        <form wire:submit.prevent = "createWard">

            <!-- Country -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="country" :value="__('District')" />
                    <x-mandatory-star />
                </span>
                <x-select-input id="district" class="block mt-1 w-full" name="district" wire:model="district">
                    <option value="">-- Select District --</option>
                    @foreach ($country_districts as $country_district )
                        <!-- Add your country options here -->
                        <option value="{{ $country_district->id }}">{{ $country_district->district }}</option>
                    @endforeach

                </x-select-input>
                <x-input-error :messages="$errors->get('district')" class="mt-2" />
            </div>
            <!-- Region -->
            <div>
                <span class="flex relative top-3">
                    <x-input-label for="ward" :value="__('Ward')" />
                    <x-mandatory-star />
                </span>
                <x-text-input id="ward" class="block mt-1 w-full" type="text" name="ward"
                    wire:model="ward" />
                <x-input-error :messages="$errors->get('ward')" class="mt-2" />
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