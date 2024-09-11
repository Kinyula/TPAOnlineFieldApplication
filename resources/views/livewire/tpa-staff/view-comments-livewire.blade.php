<div class="bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-2xl font-bold text-gray-800 flex items-center mb-4">
        <i class="fas fa-comments text-yellow-500 mr-2"></i>
        Comments
    </h2>

    <!-- Search Bar -->
    <div class="mb-4">
        <input type="text" wire:model.live="search" placeholder="Search by group name..."
            class="block w-full mt-1 bg-gray-100 border border-gray-300 text-gray-900 py-2 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-500">
    </div>

    <!-- Toggle Trashed Comments Link -->
    <div class="mb-4">
        <button wire:click="toggleTrashed" class="text-blue-500 hover:text-blue-700">
            {{ $showTrashed ? 'View Active Comments' : 'View Trashed Comments' }}
        </button>
    </div>

    @if ($comments->isEmpty())
        <p class="text-gray-600">No comments found.</p>
    @else
        <ul class="space-y-4">
            @foreach ($comments as $comment)
                <li class="border-b border-gray-200 pb-4">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-user-circle text-gray-500 mr-2"></i>
                        <span class="font-bold">{{ $comment->user->first_name }} {{ $comment->user->last_name }}</span>
                        <span class="text-sm text-gray-500 ml-2">{{ $comment->created_at->format('d M, Y H:i') }}</span>

                        @if ($showTrashed)
                            <button wire:click="restoreComment({{ $comment->id }})"
                                class="ml-4 text-green-500 hover:text-green-700"
                                onclick="confirm('Are you sure you want to restore this comment?') || event.stopImmediatePropagation()">
                                <i class="fas fa-undo"></i>
                            </button>
                        @else
                            <button wire:click="editComment({{ $comment->id }})"
                                class="ml-4 text-blue-500 hover:text-blue-700">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="deleteComment({{ $comment->id }})"
                                class="ml-4 text-red-500 hover:text-red-700"
                                onclick="confirm('Are you sure you want to delete this comment?') || event.stopImmediatePropagation()">
                                <i class="fas fa-trash"></i>
                            </button>
                        @endif
                    </div>
                    <p class="text-gray-700 mb-2">{{ $comment->comment }}</p>

                    <!-- Display Assignment Group -->
                    @if ($comment->assignmentGroup)
                        <div class="text-gray-600">
                            <span class="font-semibold">Group:</span>
                            <span
                                class="text-yellow-500 font-weight-bold uppercase">{{ $comment->assignmentGroup->group }}</span>
                            <span class="text-sm text-gray-500 ml-2">
                                <br>
                                Commented by: <span
                                    class="font-weight-bold text-yellow-500 uppercase">{{ $comment->assignmentGroup->user->position }}</span>
                            </span>
                        </div>
                    @else
                        <div class="text-gray-600">
                            <span class="font-semibold">Group:</span> Not assigned
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $comments->links() }}
        </div>
    @endif

    <!-- Edit Comment Form -->
    @if ($editingComment)
        <div class="mt-6 bg-gray-100 p-4 rounded-lg">
            <h3 class="text-lg font-bold mb-4">Edit Comment</h3>
            <form wire:submit.prevent="updateComment">
                <div class="mb-4">
                    <textarea wire:model.lazy="editCommentText" rows="4"
                        class="block w-full mt-1 bg-white border border-gray-300 text-gray-900 py-2 px-4 rounded leading-tight focus:outline-none focus:border-yellow-500">{{ $editCommentText }}</textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-300"><i class="fas fa-check px-1"></i> Save</button>
                    <button type="button" wire:click="cancelEdit"
                        class="ml-2 bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400"><i class="fas fa-close px-1"></i>Cancel</button>
                </div>
            </form>
        </div>
    @endif
</div>
