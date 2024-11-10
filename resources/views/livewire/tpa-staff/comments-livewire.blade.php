<div class="bg-white shadow-lg rounded-lg p-6">
    @if (session()->has('message'))
        <div class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('message') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                wire:click="$set('message', null)">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif

    <h2 class="text-2xl font-bold text-gray-800 flex items-center mb-4">
        <i class="fas fa-plus text-yellow-500 mr-2"></i>
        Create Comment
    </h2>

    <p class="text-red-500">NB: all parts with * are mandatory</p>

    <form wire:submit.prevent="submitComment" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Assignment Group -->
        <div class="mb-4">
            <label for="group" class="block text-gray-700 font-bold mb-2">
                <span class="flex items-center">
                    Assignment Group <span class="text-red-500 ml-1">*</span>
                </span>
            </label>
            <select id="group" wire:model="group"
                class="block w-full mt-1 bg-gray-100 border border-gray-300 text-gray-900 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-500">
                <option value="">-- Select Assignment Group --</option>
                @foreach ($assignmentGroups as $assignmentGroup)
                    <option value="{{ $assignmentGroup->id }}">{{ $assignmentGroup->assignmentGroup->group }}</option>
                @endforeach
            </select>
            @error('group')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Comment -->
        <div class="mb-4">
            <label for="comment" class="block text-gray-700 font-bold mb-2">
                <span class="flex items-center">
                    Comment <span class="text-red-500 ml-1">*</span>
                </span>
            </label>
            <textarea id="comment" wire:model="comment"
                class="block w-full mt-1 bg-gray-100 border border-gray-300 text-gray-900 py-2 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-500"
                placeholder="Enter your comment here..."
                rows="4"></textarea>
            @error('comment')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-6">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white font-bold rounded-full shadow hover:bg-yellow-600 transition">
                <i class="fas fa-check px-1"></i>
                {{ __('Save') }}
            </button>
        </div>
    </form>
</div>
