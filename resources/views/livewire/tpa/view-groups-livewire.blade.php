<div>


    <div class="container mx-auto p-4 card-box">
        @if (session()->has('message'))
            <div role="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                <strong>{{ session('message') }}</strong>
                <button class="absolute top-0 right-0 mt-1 mr-2 text-red-500 hover:text-red-700" data-bs-dismiss="alert">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif
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
                        <th class="px-4 py-2 border-b">Gender</th>
                        <th class="px-4 py-2 border-b">Phone Number</th>
                        <th class="px-4 py-2 border-b">Institute Name</th>
                        <th class="px-4 py-2 border-b">Department Name</th>
                        <th class="px-4 py-2 border-b">Floor Number</th>
                        <th class="px-4 py-2 border-b">Office Name</th>
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
                        @php
                            $application = $group->tpaFieldApplications;
                        @endphp

                        <tr>
                            <td class="px-4 py-2 border-b">{{ $group->group }}</td>
                            <td class="px-4 py-2 border-b">{{ $application->user->first_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $application->user->last_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $application->user->gender }}</td>
                            <td class="px-4 py-2 border-b">{{ $application->user->phone_number }}</td>
                            <td class="px-4 py-2 border-b">
                                {{ $application->user->academicDetails?->institute_name }}
                            </td>


                            <td class="px-4 py-2 border-b">
                                {{ $application->department->department }}
                            </td>

                            <td class="px-4 py-2 border-b">
                                {{ $application->department->floor_number }}
                            </td>

                            <td class="px-4 py-2 border-b">
                                {{ $application->department->office_name }}
                            </td>
                            <td class="px-4 py-2 border-b">{{ $group->created_at->format('F , j , Y h:i A') }}</td>

                            @if (auth()->user()->position === 'tpa supervisor')
                                <td
                                    class="px-4 py-2 border-b bg-green-100 text-green-600 text-xs font-medium rounded-full">
                                    {{ $application->allocation_status }}
                                </td>
                                <td class="px-4 py-2 border-b">
                                    <button wire:click="toggleAssign({{ $application->id }})"
                                        class="px-4 py-2 text-white {{ $application->allocation_status === 'assigned' ? 'bg-red-500' : 'bg-green-500' }} rounded">
                                        <i
                                            class="{{ $application->allocation_status === 'assigned' ? 'fas fa-user-minus' : 'fas fa-user-plus' }} mr-2"></i>
                                        {{ $application->allocation_status === 'assigned' ? 'Unassign' : 'Assign' }}
                                    </button>
                                </td>
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
