<div class="bg-white shadow-lg rounded-lg p-6">
    {{-- @if (session()->has('confirm'))
        <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            <strong>{{ session('confirm') }}</strong>
            <button class="absolute top-0 right-0 mt-1 mr-2 text-green-500 hover:text-green-700" data-bs-dismiss="alert">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif --}}

    <h2 class="text-xl font-bold text-yellow-500 mb-5">View your application status</h2>

    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-yellow-500 text-white">
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">First name</th>
                    <th class="px-4 py-2 text-left">Last name</th>
                    <th class="px-4 py-2 text-left">Phone number</th>
                    <th class="px-4 py-2 text-left">Role</th>
                    <th class="px-4 py-2 text-left">Department</th>
                    <th class="px-4 py-2 text-left">Module</th>
                    <th class="px-4 py-2 text-left">Sub module</th>
                    <th class="px-4 py-2 text-left">Confirmation status</th>
                    <th class="px-4 py-2 text-left">Viewing status</th>
                    <th class="px-4 py-2 text-left">Approval status</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @php
                    $srNo = 1;
                @endphp

                @foreach ($applications as $application)
                    <tr class="border-b">
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
                                class="px-3 py-1 rounded text-white
                                {{ $application->confirm_status == 'confirmed' ? 'bg-gray-300 cursor-not-allowed' : 'bg-red-500 hover:bg-red-700' }}"
                                {{ $application->confirm_status == 'confirmed' ? 'disabled' : '' }}>

                                <i class="{{ $application->confirm_status == 'confirmed' ? 'fas fa-check' : 'fas fa-times' }}"></i>
                                {{ $application->confirm_status == 'confirmed' ? 'Confirmed' : 'Not Confirmed' }}
                            </button>

                        </td>
                        <td class="px-4 py-2">
                            <button
                                onclick="confirm('Are you sure you want to perform this action ? bacause this action is irreversible') || event.stopImmediatePropagation()"
                                class="px-3 py-1 rounded text-white
                                {{ $application->view_status == 'viewed' ? 'bg-green-500 hover:bg-green-700' : 'bg-red-500 hover:bg-red-700' }}">
                                <i
                                    class="{{ $application->view_status == 'viewed' ? 'fas fa-eye' : 'fas fa-eye-slash' }}"></i>
                                {{ $application->view_status == 'viewed' ? 'Viewed' : 'Not Viewed' }}
                            </button>
                        </td>

                        <td class="px-4 py-2">
                            <button
                                onclick="confirm('Are you sure you want to perform this action ? bacause this action is irreversible') || event.stopImmediatePropagation()"
                                class="px-3 py-1 rounded text-white
                                {{ $application->approval_status == 'approved' ? 'bg-green-500 hover:bg-green-700' : 'bg-red-500 hover:bg-red-700' }}">
                                <i
                                    class="{{ $application->approval_status == 'approved' ? 'fas fa-check' : 'fas fa-times' }}"></i>
                                {{ $application->approval_status == 'approved' ? 'Approved' : 'Not Approved' }}
                            </button>
                        </td>

                        <td class="px-4 py-2">
                            <div class="relative">
                                <button class="text-yellow-500 hover:text-yellow-700">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                                    <button type="submit"
                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100"
                                        wire:click="deleteCategory({{ $application->id }})"
                                        onclick="confirm('Are you sure you want to delete this applicant from the list?') || event.stopImmediatePropagation()">
                                        <i class="fas fa-trash-alt mr-2"></i>Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
