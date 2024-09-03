<div>
    <div class="card-box mb-30 p-3">
        <!-- Table Header -->
        <h2 class="text-xl font-bold text-yellow-500 mb-5"><i class="fas fa-user"></i> View Responded Students</h2>

        <!-- Search Bar and Actions -->
        <div class="flex flex-col sm:flex-row sm:justify-between items-center mb-4 space-y-4 sm:space-y-0">
            <input type="text" placeholder="Search..."
                class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 w-full sm:w-1/3"
                wire:model.live="search">

            <div class="flex flex-wrap justify-center space-x-2 space-y-2 sm:space-y-0">
                <div class="flex items-center">
                    <input type="checkbox" id="selectAll" wire:model="selectAll" class="mr-2">
                    <label for="selectAll" class="font-medium text-gray-700">Select All</label>
                </div>

                <!-- Delete All Button -->
                <button
                    class="flex items-center justify-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105"
                    wire:click="deleteSelected"
                    onclick="confirm('Are you sure you want to delete all selected applications?') || event.stopImmediatePropagation()">
                    <i class="fas fa-trash-alt mr-2"></i> Delete All
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-yellow-500 text-white">
                        <th class="px-4 py-2 text-left w-10">
                            <input type="checkbox" wire:model="selectAll" class="mr-2">
                        </th>
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">First name</th>
                        <th class="px-4 py-2 text-left">Last name</th>
                        <th class="px-4 py-2 text-left">Phone number</th>
                        <th class="px-4 py-2 text-left">Time sent</th>
                        <th class="px-4 py-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @php
                        $srNo = 1;
                    @endphp

                    @forelse ($applications as $application)
                        <tr class="border-b">
                            <td class="px-4 py-2 w-10">
                                <input type="checkbox" wire:model.change="selectedApplications"
                                    value="{{ $application->id }}">
                            </td>
                            <td class="px-4 py-2">{{ $srNo++ }}</td>
                            <td class="px-4 py-2">{{ $application->user->first_name }}</td>
                            <td class="px-4 py-2">{{ $application->user->last_name }}</td>
                            <td class="px-4 py-2">{{ $application->user->phone_number }}</td>

                            <td class="px-4 py-2">
                                @php
                                    $timeSent = strtotime($application->created_at);
                                    echo date('F j, Y, g:i A', $timeSent);
                                @endphp
                            </td>
                            <td class="px-4 py-2">
                                <button wire:click="deleteApplication({{ $application->id }})"
                                    class="flex items-center justify-center px-3 py-1 rounded text-white bg-red-500 hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105"
                                    onclick="confirm('Are you sure you want to delete this application? This action is irreversible.') || event.stopImmediatePropagation()">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 text-center text-gray-500">
                                No responded students found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $applications->links() }}
            </div>
        </div>
    </div>

</div>
