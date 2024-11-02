<div>
    <div class="max-w-3xl mx-auto py-8 card-box mb-30 p-3 mt-5">
        @if (session()->has('message'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('message') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700" data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif
    <h2 class="text-blue-500 text-2xl col-span-1 md:col-span-2">
        <i class="fas fa-graduation-cap"></i> Update Academic Details
    </h2>
    <form wire:submit.prevent="updateAcademicDetail" class="grid grid-cols-1 md:grid-cols-2 gap-4">


        <div class="mb-4">
            <label for="institute_name" class="block text-gray-700">Institute Name</label>
            <input type="text" id="institute_name" wire:model.defer="institute_name"
                   class="w-full px-4 py-2 border border-gray-300 rounded @error('institute_name') border-red-500 @enderror">
            @error('institute_name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="education_level" class="block text-gray-700">Education Level</label>
            <select id="education_level" wire:model.defer="education_level"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('education_level') border-red-500 @enderror">
                <option value="">Select Education Level</option>
                <option value="bachelor">Bachelor's Degree</option>
                <option value="masters">Master's Degree</option>
                <option value="phd">PhD</option>
            </select>
            @error('education_level')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700">Status</label>
            <select id="status" wire:model.defer="status"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('status') border-red-500 @enderror">
                <option value="">Select Status</option>
                <option value="first year">First Year</option>
                <option value="second year">Second Year</option>
                <option value="third year">Third Year</option>
                <option value="fourth year">Fourth Year</option>
                <option value="fifth year">Fifth Year</option>
            </select>
            @error('status')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="program" class="block text-gray-700">Program</label>
            <input type="text" id="program" wire:model.defer="program"
                   class="w-full px-4 py-2 border border-gray-300 rounded @error('program') border-red-500 @enderror">
            @error('program')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="registration_number" class="block text-gray-700">Registration Number</label>
            <input type="text" id="registration_number" wire:model.defer="registration_number"
                   class="w-full px-4 py-2 border border-gray-300 rounded @error('registration_number') border-red-500 @enderror">
            @error('registration_number')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="year" class="block text-gray-700">Year</label>
            <input type="number" id="year" wire:model.defer="year"
                   class="w-full px-4 py-2 border border-gray-300 rounded @error('year') border-red-500 @enderror">
            @error('year')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button, spans 2 columns on md screens and up -->
        <div class="flex items-center justify-start mt-4 col-span-1 md:col-span-2">
            <x-primary-button class="bg-blue-800 flex justify-center items-center">
                <i class="fas fa-check px-1"></i> {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>

    </div>

</div>
