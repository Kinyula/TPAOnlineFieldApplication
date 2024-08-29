<div>
    @if (auth()->user()->role_id == '2')
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            <!-- Software Development -->
            <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
                <div class="flex flex-col items-center">
                    <i class="fas fa-laptop-code text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                    <h4 class="font-weight-bold uppercase text-center">
                        Software Development
                    </h4>
                </div>
                <div class="mt-4 text-center">


                    <span class="font-weight-bold text-yellow-500">Vacant spaces : </span>

                    <span
                        class="font-weight-bold text-blue-800">{{ $software_development_vacant_spaces->vacant_space }}</span>



                </div>
                <!-- Deadline -->
                <div class="mt-4 text-center">

                </div>
            </div>

            <!-- Networking -->
            <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
                <div class="flex flex-col items-center">
                    <i class="fas fa-network-wired text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                    <h4 class="font-weight-bold uppercase text-center">
                        Networking
                    </h4>
                </div>
                <div class="mt-4 text-center">
                    <span class="font-weight-bold text-yellow-500">Vacant spaces : </span>

                    <span class="font-weight-bold text-blue-800">{{ $networking_vacant_spaces->vacant_space }}</span>

                </div>
                <!-- Deadline -->
                <div class="mt-4 text-center">

                </div>
            </div>

            <!-- Marketing -->
            <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
                <div class="flex flex-col items-center">
                    <i class="fas fa-bullhorn text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                    <h4 class="font-weight-bold uppercase text-center">
                        Marketing
                    </h4>
                </div>
                <div class="mt-4 text-center">


                    <span class="font-weight-bold text-yellow-500">Vacant spaces : </span>

                    <span
                        class="font-weight-bold text-blue-800">{{ $marketing_vacant_spaces->vacant_space ?? 0 }}</span>
                    </a>

                </div>
            </div>

            <!-- Applicants -->
            <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
                <div class="flex flex-col items-center">
                    <i class="fas fa-users text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                    <h4 class="font-weight-bold uppercase text-center">
                        Applicants
                    </h4>
                </div>
                <div class="mt-4 text-center">
                    <span class="font-weight-bold text-yellow-500">Total: </span>
                    <span class="font-weight-bold text-blue-800">{{ $total_applicants ?? 0 }}</span>
                </div>
            </div>


        </div>
    @endif

    <div class="bg-white shadow-lg rounded-lg p-6">


        <!-- Session Alerts -->
        @foreach (['restore-selected', 'restore-single', 'delete-selected', 'delete-single', 'download'] as $msg)
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
        <h2 class="text-xl font-bold text-yellow-500 mb-5"><i class="fas fa-user"></i> View Students Application Status
        </h2>

        <!-- Search Bar and Actions -->
        @if (auth()->user()->role_id == '2')
            <div class="flex flex-col sm:flex-row sm:justify-between items-center mb-4 space-y-4 sm:space-y-0">
                <input type="text" placeholder="Search..."
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 w-full sm:w-1/3"
                    wire:model.live="search">

            </div>
        @else
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
                        wire:click="updateStatuses"
                        onclick="confirm('Are you sure you want to update the status for all selected applications?') || event.stopImmediatePropagation()">
                        <i class="fas fa-check mr-2"></i> Update Status
                    </button>

                    <!-- Delete All Button -->
                    <button
                        class="flex items-center justify-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105"
                        wire:click="deleteSelected"
                        onclick="confirm('Are you sure you want to delete all selected applications?') || event.stopImmediatePropagation()">
                        <i class="fas fa-trash-alt mr-2"></i> Delete All
                    </button>

                    <!-- Print Excel Button -->
                    <button
                        class="flex items-center justify-center px-4 py-2 bg-blue-400 text-white rounded-md hover:bg-blue-700 transition duration-200 ease-in-out transform hover:scale-105"
                        wire:click="exportStudentsExcel">
                        <i class="fas fa-file-excel mr-2"></i> Print Excel
                    </button>

                </div>
            </div>
            <!-- Button to View Trashed Information -->
            <div class="mb-4">
                <a href="{{ asset('TPA/student-restore-application-infos') }}"
                    class="flex items-center justify-center px-4 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-400 transition duration-200 ease-in-out">
                    <i class="fas fa-trash-restore mr-2"></i> View Trashed Details
                </a>
            </div>
        @endif

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
                        <th class="px-4 py-2 text-left">Module</th>
                        <th class="px-4 py-2 text-left">Sub Module</th>
                        <th class="px-4 py-2 text-left">Confirmation Status</th>
                        <th class="px-4 py-2 text-left">Viewing Status</th>
                        <th class="px-4 py-2 text-left">Approval Status</th>
                        <th class="px-4 py-2 text-left">Application Letter</th>
                        <th class="px-4 py-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @php
                        $srNo = 1;
                    @endphp

                    @foreach ($applications as $application)
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
                            <td class="px-4 py-2">{{ $application->modules->module_name }}</td>
                            <td class="px-4 py-2">{{ $application->subModule->sub_module ?? 'N/A' }}</td>
                            <td class="px-4 py-2">
                                <button wire:click="confirmPlace({{ $application->id }})"
                                    onclick="confirm('Are you sure you want to perform this action? This action is irreversible.') || event.stopImmediatePropagation()"
                                    class="flex items-center justify-center px-3 py-1 rounded text-white
                                    {{ $application->confirm_status == 'confirmed' ? 'bg-gray-300 cursor-not-allowed' : 'bg-red-500 hover:bg-red-700' }}"
                                    {{ $application->confirm_status == 'confirmed' ? 'disabled' : '' }}>
                                    <i
                                        class="{{ $application->confirm_status == 'confirmed' ? 'fas fa-check' : 'fas fa-times' }}"></i>
                                    {{ $application->confirm_status == 'confirmed' ? 'Confirmed' : 'Not Confirmed' }}
                                </button>
                            </td>
                            <td class="px-4 py-2">
                                <button
                                    class="flex items-center justify-center px-3 py-1 rounded text-white
                                    {{ $application->view_status == 'viewed' ? 'bg-green-500 hover:bg-green-700' : 'bg-red-500 hover:bg-red-700' }}">
                                    <i
                                        class="{{ $application->view_status == 'viewed' ? 'fas fa-eye' : 'fas fa-eye-slash' }}"></i>
                                    {{ $application->view_status == 'viewed' ? 'Viewed' : 'Not Viewed' }}
                                </button>
                            </td>

                            <td class="px-4 py-2">
                                <button wire:click="approvalStatus({{ $application->id }})"
                                    class="flex items-center justify-center px-3 py-1 rounded text-white
                                    {{ $application->approval_status == 'approved' ? 'bg-green-500 hover:bg-green-700' : 'bg-red-500 hover:bg-red-700' }}">
                                    <i
                                        class="{{ $application->approval_status == 'approved' ? 'fas fa-check' : 'fas fa-times' }}"></i>
                                    {{ $application->approval_status == 'approved' ? 'Approved' : 'Not Approved' }}
                                </button>
                            </td>

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
                                <button wire:click="deleteApplication({{ $application->id }})"
                                    class="flex items-center justify-center px-3 py-1 rounded text-white bg-red-500 hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105"
                                    onclick="confirm('Are you sure you want to delete this application? This action is irreversible.') || event.stopImmediatePropagation()">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $applications->links() }}
            </div>
        </div>
    </div>

</div>
