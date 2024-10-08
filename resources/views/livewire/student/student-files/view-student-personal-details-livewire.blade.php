<div class="bg-white shadow-lg rounded-lg p-6">
    @if (session()->has('delete-selected'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('delete-selected') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700" data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif

    @if (session()->has('delete-single'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('delete-single') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif

    @if (session()->has('export'))
        <div role="alert"
            class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3">
            <i class="fas fa-check-circle w-6 h-6 mr-3 text-green-500"></i>
            <div class="flex-1">
                <strong class="font-medium">{{ session('export') }}</strong>
            </div>
            <button class="absolute top-0 right-0 mt-2 mr-2 text-green-500 hover:text-green-700"
                data-bs-dismiss="alert">
                <i class="fas fa-times w-5 h-5"></i>
            </button>
        </div>
    @endif
    <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-user"></i> Personal Student Details</h3>

    @if (!auth()->user()->role_id == '0')
        <!-- Search Bar and Actions -->
        <div class="flex flex-col sm:flex-row sm:justify-between items-center mb-4 space-y-4 sm:space-y-0">
            <input type="text" placeholder="Search..."
                class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 w-full sm:w-1/3"
                wire:model.live="search">

            <div class="flex space-x-2">
                <button wire:click="exportExcel"
                    class="flex items-center justify-center px-4 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-400 transition duration-200 ease-in-out transform hover:scale-105">
                    <i class="fas fa-file-excel mr-2"></i> Export to Excel
                </button>

                <button wire:click="deleteSelected"
                    onclick="confirm(`Are you sure you want to delete all selected records?`) || event.stopImmediatePropagation()"
                    class="flex items-center justify-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <i class="fas fa-trash-alt mr-2"></i> Delete Selected
                </button>
            </div>
        </div>
    @else
    @endif


    @if (!auth()->user()->role_id == '0')
        <!-- Button to View Trashed Information -->
        <div class="mb-4">
            <a href="{{ asset('TPA/student-restore-personal-infos') }}"
                class="flex items-center justify-center px-4 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-400 transition duration-200 ease-in-out">
                <i class="fas fa-trash-restore mr-2"></i> View Trashed Details
            </a>
        </div>
    @else
    @endif


    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse bg-white">
            <thead>
                <tr class="bg-yellow-500 text-white">
                    @if (!auth()->user()->role_id == '0')
                        <th class="px-4 py-2">
                            <input type="checkbox" wire:model="selectAll" class="mr-2">
                        </th>
                    @else
                    @endif

                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Phone Number</th>
                    <th class="px-4 py-2">Gender</th>
                    <th class="px-4 py-2">Date of Birth</th>
                    <th class="px-4 py-2">Disability Status</th>
                    <th class="px-4 py-2">NIDA Number</th>
                    <th class="px-4 py-2">Marital Status</th>


                    @if (!auth()->user()->role_id == '0')
                        <th class="px-4 py-2">Actions</th>
                    @else
                    @endif

                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($personalDetails as $detail)
                    <tr class="border-b">
                        @if (!auth()->user()->role_id == '0')
                            <td class="px-4 py-2">
                                <input type="checkbox" wire:model="selected" value="{{ $detail->id }}">
                            </td>
                        @else
                        @endif

                        <td class="px-4 py-2">{{ $detail->user->first_name }}</td>
                        <td class="px-4 py-2">{{ $detail->user->last_name }}</td>
                        <td class="px-4 py-2">{{ $detail->user->email }}</td>
                        <td class="px-4 py-2">{{ $detail->user->phone_number }}</td>
                        <td class="px-4 py-2">{{ $detail->user->gender }}</td>
                        <td class="px-4 py-2">{{ Carbon\Carbon::parse($detail->date_of_birth)->format('F j, Y') }}</td>
                        <td class="px-4 py-2">{{ $detail->disability_status }}</td>
                        <td class="px-4 py-2">{{ $detail->nida_number ?? 'N/A' }}</td>
                        <td class="px-4 py-2">{{ $detail->marital_status }}</td>

                        @if (!auth()->user()->role_id == '0')
                            <td class="px-4 py-2 flex space-x-2">
                                <!-- Delete Button -->
                                <button wire:click="delete({{ $detail->id }})"
                                    onclick="confirm(`Are you sure you want to delete this student named {{ $detail->user->first_name }} {{ $detail->user->last_name }}?`) || event.stopImmediatePropagation()"
                                    class="flex items-center justify-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105">
                                    <i class="fas fa-trash-alt mr-2"></i> Delete
                                </button>
                            </td>
                        @else
                        @endif

                    </tr>
                @empty
                    <tr>
                        <td colspan="14" class="text-center p-4 text-gray-500">No results found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $personalDetails->links() }}
    </div>
</div>
