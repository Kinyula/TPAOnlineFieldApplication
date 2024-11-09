<div class="bg-white shadow-lg rounded-lg p-6">
    @if (session()->has('field_spaces'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('field_spaces') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700" data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif
    <h2 class="text-2xl font-bold text-gray-800 flex items-center mb-4">
        <i class="fas fa-plus text-yellow-500 mr-2"></i>
        Create Vacant Spaces for field application
    </h2>

    <p class="text-red-500">NB: all parts with * are mandatory</p>

    <form wire:submit.prevent = "createVacantSpaces" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        {{-- department ID --}}
        <div class="mb-4">
            <label for="department" class="block text-gray-700 font-bold mb-2">
                <span class="flex items-center">
                    department <span class="text-red-500 ml-1">*</span>
                </span>
            </label>
            <select id="department" name="department" wire:model="department"
                class="block w-full mt-1 bg-gray-100 border border-gray-300 text-gray-900 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-500">
                <option value="">-- Select Department --</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department }}</option>
                @endforeach
            </select>
            @error('department')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Vacant Space -->
        <div class="mb-4">
            <label for="vacant_space" class="block text-gray-700 font-bold mb-2">
                <span class="flex items-center">
                    Vacant Space <span class="text-red-500 ml-1">*</span>
                </span>
            </label>
            <input id="vacant_space" type="text" name="vacant_space" wire:model="vacant_space"
                class="block w-full mt-1 bg-gray-100 border border-gray-300 text-gray-900 py-2 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-500">
            @error('vacant_space')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-6">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white font-bold rounded-lg shadow hover:bg-yellow-600 transition">
                <i class="fas fa-check px-1"></i>
                {{ __('Save') }}
            </button>
        </div>
    </form>
</div>
