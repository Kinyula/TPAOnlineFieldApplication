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
        <h2 class="text-blue-500 text-2xl"><i class="fas fa-user"></i> Update referee details</h2>
        <form wire:submit.prevent="updateRefereeDetails">
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700">First Name</label>
                <input type="text" id="first_name" wire:model.defer="first_name"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('first_name') border-red-500 @enderror">
                @error('first_name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-gray-700">Last Name</label>
                <input type="text" id="last_name" wire:model.defer="last_name"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('first_name') border-red-500 @enderror">
                @error('last_name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" wire:model.defer="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('first_name') border-red-500 @enderror">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700">Phone Number</label>
                <input type="number" id="email" wire:model.defer="phone_number"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('phone_number') border-red-500 @enderror">
                @error('phone_number')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="institute_name" class="block text-gray-700">Institute Name</label>
                <input type="text" id="email" wire:model.defer="institute_name"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('institute_name') border-red-500 @enderror">
                @error('institute_name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="occupation" class="block text-gray-700">Occupation</label>
                <input type="text" id="occupation" wire:model.defer="occupation"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('occupation') border-red-500 @enderror">
                @error('occupation')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                <label for="gender" class="block text-gray-700">Gender</label>
                <select id="gender" wire:model.defer="gender"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('disability_status') border-red-500 @enderror">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('gender')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>



            <!-- Submit Button -->
            <div class="flex items-center justify-start mt-4">
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
