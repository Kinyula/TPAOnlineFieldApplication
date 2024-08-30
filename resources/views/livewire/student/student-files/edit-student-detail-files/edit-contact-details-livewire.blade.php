<div>
    <div class="card-box mb-30 p-3">
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
                    <!-- Assume these options are dynamically generated from the database -->
                    <option value="1">Region 1</option>
                    <option value="2">Region 2</option>
                </select>
                @error('region')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="district" class="block text-gray-700">District</label>
                <select id="district" wire:model.defer="district"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('district') border-red-500 @enderror">
                    <option value="">Select District</option>
                    <!-- Assume these options are dynamically generated from the database -->
                    <option value="1">District 1</option>
                    <option value="2">District 2</option>
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
                    <!-- Assume these options are dynamically generated from the database -->
                    <option value="1">Ward 1</option>
                    <option value="2">Ward 2</option>
                </select>
                @error('ward')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
        </form>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </div>

</div>
