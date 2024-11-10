<div>
    <div class="bg-white shadow-lg rounded-lg p-6">
        <!-- Flash message for successful task creation -->
        @if (session()->has('success'))
            <div
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 flex items-center">
                <i class="fas fa-check-circle w-5 h-5 mr-2"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif


        <!-- Task creation form -->
        <h2 class="text-xl font-bold mb-4 flex items-center">
            <i class="fas fa-tasks text-yellow-500 mr-2"></i>
            Create New Task
        </h2>

        <form wire:submit.prevent="createTask" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Select Group -->
            <div class="mb-4">
                <label for="group" class="block text-gray-700 font-bold mb-2">
                    <span class="flex items-center">
                        Select Group <span class="text-red-500 ml-1">*</span>
                    </span>
                </label>
                <select wire:model="selectedGroup" id="group"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                    <option value="">{{ __('-- Choose a Group --') }}</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->group }}</option>
                    @endforeach
                </select>

                @error('selectedGroup')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>


            <!-- Task Input -->
            <div class="mb-4">
                <label for="task" class="block text-gray-700 font-bold mb-2">
                    Task Description <span class="text-red-500">*</span>
                </label>
                <textarea wire:model="task" id="task" rows="4"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500"></textarea>

                @error('task')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end">
                <button type="submit" wire:loading.attr = "disabled"
                    class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white font-bold rounded-full  shadow hover:bg-yellow-600 transition">
                    <i class="fas fa-check px-1"></i>
                    {{ __('Save Task') }}
                </button>
            </div>
        </form>
    </div>

</div>
