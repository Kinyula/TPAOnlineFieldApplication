<div>
    <div class="card-box mb-30 p-3 mt-5">
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
        <h2 class="text-blue-500 text-2xl"><i class="fas fa-user"></i> Update personal details</h2>
        <form wire:submit.prevent="updatePersonalDetail">
            <div class="mb-4">
                <label for="date_of_birth" class="block text-gray-700">Date of Birth</label>
                <input type="date" id="date_of_birth" wire:model.defer="date_of_birth"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('date_of_birth') border-red-500 @enderror">
                @error('date_of_birth')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="disability_status" class="block text-gray-700">Disability Status</label>
                <select id="disability_status" wire:model.defer="disability_status"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('disability_status') border-red-500 @enderror">
                    <option value="">Select Disability Status</option>
                    <option value="none">None</option>
                    <option value="disabled">Disabled</option>
                </select>
                @error('disability_status')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="marital_status" class="block text-gray-700">Marital Status</label>
                <select id="marital_status" wire:model.defer="marital_status"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('marital_status') border-red-500 @enderror">
                    <option value="">Select Marital Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>
                @error('marital_status')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-800 text-white rounded uppercase"><i class="fas fa-check px-1"></i> Update</button>
        </form>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </div>

</div>
