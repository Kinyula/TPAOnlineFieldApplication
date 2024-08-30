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

        <form wire:submit.prevent="updateAcademicDetail">
            <h2 class="text-blue-500 text-2xl"><i class="fas fa-graduation-cap"></i> Update academic details</h2>
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
                    <option value="first year">First year</option>
                    <option value="second year">Second year</option>
                    <option value="third year">Third year</option>
                    <option value="fourth year">Fourth year</option>
                    <option value="fifth year">Fifth year</option>
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

            <div class="mt-6">
                <button type="submit"
                    class="px-4 py-2 bg-blue-800 text-white rounded hover:bg-blue-700 transition cursor-pointer"
                    wire:loading.attr = "disabled"><i class="fas fa-check px-1"></i> Update</button>
            </div>
        </form>
    </div>

</div>
