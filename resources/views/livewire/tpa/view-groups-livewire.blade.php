<div>
    <div class="container mx-auto p-4 card-box">
        <h2 class="text-xl font-bold mb-4">Groups and Students</h2>

        <!-- Search Bar -->
        <div class="mb-4">
            <input type="text" wire:model.live="search" placeholder="Search groups or students..."
                class="px-4 py-2 border rounded w-full">
        </div>

        <!-- Responsive Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-yellow-500 text-white">
                    <tr>
                        <th class="px-4 py-2 border-b">Group Name</th>
                        <th class="px-4 py-2 border-b">First Name</th>
                        <th class="px-4 py-2 border-b">Last Name</th>
                        <th class="px-4 py-2 border-b">Phone Number</th>
                        <th class="px-4 py-2 border-b">Institute Name</th>
                        <th class="px-4 py-2 border-b">Created At</th>

                        @if (auth()->user()->position === 'tpa supervisor')
                            <th class="px-4 py-2 border-b">Allocation Status</th>
                            <th class="px-4 py-2 border-b">Action</th>
                        @else
                        @endif

                    </tr>
                </thead>
                <tbody>
                    @forelse($groups as $group)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $group->group }}</td>
                            <td class="px-4 py-2 border-b">{{ $group->tpaFieldApplications->user->first_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $group->tpaFieldApplications->user->last_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $group->tpaFieldApplications->user->phone_number }}</td>
                            <td class="px-4 py-2 border-b">{{ $group->tpaFieldApplications->user->academicDetails?->institute_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $group->created_at->format('F , j , Y h:i A') }}</td>
                            @if (auth()->user()->position === 'tpa supervisor')
                                <td
                                    class="px-4 py-2 border-b bg-green-100 text-green-600 text-xs font-medium  rounded-full">
                                    {{ $group->tpaFieldApplications->allocation_status ? 'assigned' : 'unassigned' }}
                                </td>
                                <td class="px-4 py-2 border-b">
                                    <!-- Unassign/Assign Button with Font Awesome Icons -->

                                    <button wire:click="toggleAssign({{ $group->tpaFieldApplications->id }})"
                                        class="px-4 py-2 text-white {{ $group->tpaFieldApplications->allocation_status ? 'bg-red-500' : 'bg-green-500' }} rounded">
                                        <i
                                            class="{{ $group->tpaFieldApplications->allocation_status ? 'fas fa-user-minus' : 'fas fa-user-plus' }} mr-2"></i>
                                        {{ $group->tpaFieldApplications->allocation_status ? 'Unassign' : 'Assign' }}
                                    </button>


                                </td>
                            @else
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 text-center">No groups found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $groups->links() }}
        </div>
    </div>
</div>
