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
        <h2 class="text-blue-500 text-2xl"><i class="fas fa-user"></i> Update project portfolio details</h2>
        <form wire:submit.prevent="updateProjectPortfolioDetails">
            <div class="mb-4">
                <label for="project_name" class="block text-gray-700">Project Name</label>
                <input type="text" id="project_name" wire:model.defer="project_name"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('first_name') border-red-500 @enderror">
                @error('project_name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="start_date" class="block text-gray-700">Start date</label>
                <input type="date" id="start_date" wire:model.defer="start_date"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('start_date') border-red-500 @enderror">
                @error('start_date')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-gray-700">End date</label>
                <input type="date" id="end_date" wire:model.defer="end_date"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('end_date') border-red-500 @enderror">
                @error('end_date')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="project_url" class="block text-gray-700">Project Url</label>
                <input type="url" id="project_url" wire:model.defer="project_url"
                    class="w-full px-4 py-2 border border-gray-300 rounded @error('project_url') border-red-500 @enderror">
                @error('project_url')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>




            <button type="submit" class="px-4 py-2 bg-blue-800 text-white rounded uppercase"><i
                    class="fas fa-check px-1"></i> Update</button>
        </form>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </div>

</div>
