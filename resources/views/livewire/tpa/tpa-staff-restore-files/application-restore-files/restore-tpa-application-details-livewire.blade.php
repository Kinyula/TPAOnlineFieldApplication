<div>
    <div class="bg-white shadow-lg rounded-lg p-6">

        <!-- Session Alerts -->
        @foreach (['restore-selected', 'restore-single', 'delete-selected', 'delete-single'] as $msg)
            @if (session()->has($msg))
                <div role="alert"
                    class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3"
                    role="alert">
                    <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
                    <div class="flex-1">
                        <strong class="font-medium">{{ session($msg) }}</strong>
                    </div>
                    <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                        data-bs-dismiss="alert">
                        <i class="fas fa-times w-5 h-5"></i>
                    </button>
                </div>
            @endif
        @endforeach
        <br>
        <!-- Table Header -->
        <h2 class="text-xl font-bold text-yellow-500 mb-5"><i class="fas fa-trash-restore"></i> Restore Trashed
            Applications</h2>

        <!-- Search Bar and Actions -->
        <div class="flex flex-col sm:flex-row sm:justify-between items-center mb-4 space-y-4 sm:space-y-0">
            <input type="text" placeholder="Search..."
                class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 w-full sm:w-1/3"
                wire:model.live="search">

            <div class="flex flex-wrap justify-center space-x-2 space-y-2 sm:space-y-0">
                <div class="flex items-center">
                    <input type="checkbox" id="selectAll" wire:model.change="selectAll" class="mr-2">
                    <label for="selectAll" class="font-medium text-gray-700">Select All</label>
                </div>

                <!-- Update All Button -->
                <button
                    class="flex items-center justify-center px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700 transition duration-200 ease-in-out transform hover:scale-105"
                    wire:click="restoreSelected"
                    onclick="confirm('Are you sure you want to restore all selected applications?') || event.stopImmediatePropagation()">
                    <i class="fas fa-undo mr-2"></i> Restore Selected
                </button>

                <!-- Delete Permanently Button -->
                <button
                    class="flex items-center justify-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105"
                    wire:click="deleteSelectedPermanently"
                    onclick="confirm('Are you sure you want to permanently delete all selected applications? This action is irreversible.') || event.stopImmediatePropagation()">
                    <i class="fas fa-trash-alt mr-2"></i> Delete Permanently
                </button>


            </div>
        </div>
        <!-- Back Button -->
        <div class="mb-4">
            <a href="{{ asset('dashboard') }}"
                class="flex items-center justify-center px-4 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-400 transition duration-200 ease-in-out">
                <i class="fas fa-arrow-left mr-2"></i> Back
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-yellow-500 text-white">
                        <th class="px-4 py-2 text-left w-10">
                            <input type="checkbox" wire:model.change="selectAll" class="mr-2">
                        </th>
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">First Name</th>
                        <th class="px-4 py-2 text-left">Last Name</th>
                        <th class="px-4 py-2 text-left">Phone number</th>
                        <th class="px-4 py-2 text-left">Role</th>
                        <th class="px-4 py-2 text-left">Department</th>
                        <th class="px-4 py-2 text-left">Application Letter</th>
                        <th class="px-4 py-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @php
                        $srNo = 1;
                    @endphp

                    @forelse ($trashedApplications as $application)
                        <tr class="border-b">
                            <td class="px-4 py-2 w-10">
                                <input type="checkbox" wire:model.change="selectedApplications"
                                    value="{{ $application->id }}">
                            </td>
                            <td class="px-4 py-2">{{ $srNo++ }}</td>
                            <td class="px-4 py-2">{{ $application->user->first_name }}</td>
                            <td class="px-4 py-2">{{ $application->user->last_name }}</td>
                            <td class="px-4 py-2">{{ $application->user->phone_number }}</td>
                            <td class="px-4 py-2">{{ $application->user->position }}</td>
                            <td class="px-4 py-2">{{ $application->department->department }}</td>
                            <td class="px-4 py-2">
                                @if ($application->approval_status == 'approved')
                                    <a href="{{ asset('storage/application_letters/' . $application->application_letter) }}"
                                        download
                                        class="text-yellow-500 hover:text-yellow-700 transition duration-200 ease-in-out transform hover:scale-105">
                                        <i class="fas fa-download"></i> Download
                                    </a>
                                @else
                                    <button type="button" class="text-slate-300 cursor-not-allowed">
                                        <i class="fas fa-download"></i>Not approved
                                    </button>
                                @endif
                            </td>

                            <td class="px-4 py-2">
                                <button wire:click="restoreApplication({{ $application->id }})"
                                    class="flex items-center justify-center px-3 py-1 rounded text-white bg-green-500 hover:bg-green-700 transition duration-200 ease-in-out transform hover:scale-105"
                                    onclick="confirm('Are you sure you want to restore this application?') || event.stopImmediatePropagation()">
                                    <i class="fas fa-undo px-1"></i> Restore
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="px-4 py-2 text-center text-gray-500">
                                No trashed applications found.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $trashedApplications->links() }}
            </div>
        </div>
    </div>
</div>
