<div>
    <div class="card-box mb-30 p-3">
        <h2 class="text-blue-500 text-2xl"><i class="fas fa-phone"></i> Update contact details</h2>
        <form wire:submit.prevent="updateContactDetail">
            <div class="mb-4">
                <label for="country" class="block text-gray-700">Country</label>
                <select id="country" wire:model.change="country"
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
                <select id="region" wire:model.change="region"
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
                <select id="district" wire:model.change="district"
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

            <button type="submit" class="px-4 py-2 bg-blue-800 text-white rounded"><i class="fas fa-check px-1"></i> Update</button>
        </form>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </div>

</div>
