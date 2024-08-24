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

    <h3 class="text-2xl font-bold mb-3 text-yellow-500"><i class="fas fa-user"></i> Restore Student Contact Details</h3>

    <!-- Search Bar and Actions -->
    <div class="flex flex-col sm:flex-row sm:justify-between items-center mb-4 space-y-4 sm:space-y-0">
        <input type="text" placeholder="Search..."
            class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 w-full sm:w-1/3"
            wire:model.live="search">

        <div class="flex space-x-2">
            <button wire:click="restoreSelected"
                onclick="confirm('Are you sure you want to restore all selected records?') || event.stopImmediatePropagation()"
                class="flex items-center justify-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-200 ease-in-out transform hover:scale-105">
                <i class="fas fa-undo mr-2"></i> Restore Selected
            </button>

            <button wire:click="deleteSelected"
                onclick="confirm('Are you sure you want to delete all selected records?') || event.stopImmediatePropagation()"
                class="flex items-center justify-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105">
                <i class="fas fa-trash-alt mr-2"></i> Delete Selected
            </button>
        </div>
    </div>

    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ asset('TPA/view-student-details') }}"
            class="flex items-center justify-center px-4 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-400 transition duration-200 ease-in-out">
            <i class="fas fa-arrow-left mr-2"></i> Back
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse bg-white">
            <thead>
                <tr class="bg-yellow-500 text-white">
                    <th class="px-4 py-2">
                        <input type="checkbox" wire:model.change="selectAll" class="mr-2">
                    </th>
                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">Phone Number</th>
                    <th class="px-4 py-2">Country</th>
                    <th class="px-4 py-2">Region</th>
                    <th class="px-4 py-2">District</th>
                    <th class="px-4 py-2">Ward</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($contactDetails as $detail)
                    <tr class="border-b">
                        <td class="px-4 py-2">
                            <input type="checkbox" wire:model.change="selected" value="{{ $detail->id }}">
                        </td>
                        <td class="px-4 py-2">{{ $detail->user->first_name }}</td>
                        <td class="px-4 py-2">{{ $detail->user->last_name }}</td>
                        <td class="px-4 py-2">{{ $detail->user->phone_number }}</td>
                        <td class="px-4 py-2">{{ $detail->country->country_name }}</td>
                        <td class="px-4 py-2">{{ $detail->region->region }}</td>
                        <td class="px-4 py-2">{{ $detail->district->district }}</td>
                        <td class="px-4 py-2">{{ $detail->ward->ward }}</td>
                        <td class="px-4 py-2 flex space-x-2">
                            <!-- Restore Button -->
                            <button wire:click="restore({{ $detail->id }})"
                                onclick="confirm('Are you sure you want to restore this student named {{ $detail->user->first_name }} {{ $detail->user->last_name }}?') || event.stopImmediatePropagation()"
                                class="flex items-center justify-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-200 ease-in-out transform hover:scale-105">
                                <i class="fas fa-undo mr-2"></i> Restore
                            </button>

                            <!-- Delete Permanently Button -->
                            <button wire:click="delete({{ $detail->id }})"
                                onclick="confirm('Are you sure you want to delete permanently this student named {{ $detail->user->first_name }} {{ $detail->user->last_name }}?') || event.stopImmediatePropagation()"
                                class="flex items-center justify-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105">
                                <i class="fas fa-trash mr-2"></i> Delete Permanently
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center p-4 text-gray-500">No results found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $contactDetails->links() }}
    </div>
</div>
