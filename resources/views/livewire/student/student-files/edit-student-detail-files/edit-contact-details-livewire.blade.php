<div>
    <div class="card-box mb-30 p-3">
        @if (session()->has('message'))
            <div role="alert"
                class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3">
                <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                <div class="flex-1">
                    <strong class="font-medium">{{ session('message') }}</strong>
                </div>
                <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                    data-bs-dismiss="alert">
                    <i class="fas fa-times w-5 h-5"></i>
                </button>
            </div>
        @endif
        <br>
        <h2 class="text-blue-500 text-2xl"><i class="fas fa-phone"></i> Update contact details</h2>
        <form wire:submit.prevent="updateContactDetail" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="country" class="block text-gray-700">Country</label>
                <select id="country" wire:model="country" wire:change="updatedCountry"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('country') border-red-500 @enderror">
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach
                </select>
                @error('country')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="region" class="block text-gray-700">Region</label>
                <select id="region" wire:model="region" wire:change="updatedRegion"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('region') border-red-500 @enderror">
                    <option value="">Select Region</option>
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}">{{ $region->region }}</option>
                    @endforeach
                </select>
                @error('region')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="district" class="block text-gray-700">District</label>
                <select id="district" wire:model="district" wire:change="updatedDistrict"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('district') border-red-500 @enderror">
                    <option value="">Select District</option>
                    @foreach ($districts as $district)
                        <option value="{{ $district->id }}">{{ $district->district }}</option>
                    @endforeach
                </select>
                @error('district')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="ward" class="block text-gray-700">Ward</label>
                <select id="ward" wire:model.defer="ward"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('ward') border-red-500 @enderror">
                    <option value="">Select Ward</option>
                    @foreach ($wards as $ward)
                        <option value="{{ $ward->id }}">{{ $ward->ward }}</option>
                    @endforeach
                </select>
                @error('ward')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-start mt-4 col-span-1 md:col-span-2">
                <x-primary-button class="bg-blue-800 flex justify-center items-center">
                    <i class="fas fa-check px-1"></i> {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>


        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </div>

</div>
