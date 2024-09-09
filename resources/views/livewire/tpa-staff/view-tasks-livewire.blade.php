<div>
    <!-- Search Bar -->
    <div class="mb-4">
        <input type="text" wire:model.live="search" placeholder="Search tasks or groups..."
            class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 px-4 py-2" />
    </div>

    <!-- Display Tasks and Groups -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <!-- Tasks Table -->
        <table class="min-w-full bg-white border border-gray-200">
            @if (session()->has('message'))
                <div role="alert"
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
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

            @if (session()->has('updated'))
                <div role="alert"
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session('updated') }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif
            <br>
            <thead class="bg-yellow-500 text-white">
                <tr>
                    <th class="text-left px-6 py-3 border-b-2 border-gray-300">Group Name</th>
                    <th class="text-left px-6 py-3 border-b-2 border-gray-300">Task</th>
                    <th class="text-left px-6 py-3 border-b-2 border-gray-300">Assigned By</th>
                    <th class="text-left px-6 py-3 border-b-2 border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                    <tr>
                        <!-- Group Name -->
                        <td class="px-6 py-4 border-b border-gray-200">
                            {{ $task->assignmentGroup->group }}
                        </td>

                        <!-- Task -->
                        <td class="px-6 py-4 border-b border-gray-200">
                            {{ $task->task }}
                        </td>

                        <!-- Assigned By (User) -->
                        <td class="px-6 py-4 border-b border-gray-200">
                            {{ $task->user->first_name }}
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4 border-b border-gray-200">
                            <button wire:click="editTask({{ $task->id }})"
                                class="text-blue-500 hover:text-blue-700 mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="deleteTask({{ $task->id }})"
                                class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 border-b border-gray-200 text-center">
                            No tasks found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $tasks->links() }}
        </div>

        <!-- View Trashed Tasks Link -->
        <div class="mt-4">
            <a href="" class="text-yellow-500 hover:text-yellow-700">
                <i class="fas fa-trash-restore"></i> View Trashed Tasks
            </a>
        </div>
    </div>

    <!-- Edit Task Form (Hidden by default) -->
    @if ($editingTask)
        <div class="bg-white shadow-lg rounded-lg p-6 mt-6">
            <h2 class="text-xl font-bold mb-4">Edit Task</h2>
            <form wire:submit.prevent="updateTask">
                <div class="mb-4">
                    <label for="task" class="block text-gray-700 font-bold mb-2">
                        Task <span class="text-red-500">*</span>
                    </label>
                    <input type="text" wire:model="taskForm.task" id="task"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 px-4 py-2" />
                    @error('taskForm.task')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-6">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white font-bold rounded-lg shadow hover:bg-yellow-600 transition">
                        <i class="fas fa-check px-1"></i> Update Task
                    </button>
                    <button wire:click="$set('editingTask', false)"
                        class="ml-4 inline-flex items-center px-4 py-2 bg-gray-500 text-white font-bold rounded-lg shadow hover:bg-gray-600 transition">
                        <i class="fas fa-times px-1"></i> Cancel
                    </button>
                </div>
            </form>
        </div>
    @endif
</div>
