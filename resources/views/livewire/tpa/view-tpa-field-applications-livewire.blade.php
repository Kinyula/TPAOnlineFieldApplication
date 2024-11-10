<div>
    @if (
        !auth()->user()->position == 'Directorate of ICT ( DICT )' ||
            !auth()->user()->position == 'Directorate of Marketing')
        <div
            class="card-box mb-30 p-6 bg-white shadow-md rounded-lg flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-6">
            <img src="{{ asset('storage/HomeImages/coat-of-arms-2.png') }}" alt="TPA Logo" class="w-16 h-16 object-cover">


            <h2 class="text-center md:text-left text-2xl font-bold text-gray-800">
                View your application
            </h2>

            <img src="{{ asset('storage/HomeImages/real-tpa.png') }}" alt="Coat of Arms"
                class="w-18 h-16 object-cover rounded">
        </div>
    @else
    @endif


    <div class="bg-white shadow-lg rounded-lg p-6">
        @if (
            !auth()->user()->position == 'Directorate of ICT ( DICT )' ||
                !auth()->user()->position == 'Directorate of Marketing')
            <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                <strong class="uppercase">Remember you have to confirm your application after you have been approved for
                    it to be
                    noticed
                    else your application will not be seen!</strong>
                <button class="absolute top-0 right-0 mt-1 mr-2 text-green-500 hover:text-green-700"
                    data-bs-dismiss="alert">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @else
        @endif

        @if (
            !auth()->user()->position == 'Directorate of ICT ( DICT )' ||
                !auth()->user()->position == 'Directorate of Marketing')
            <h2 class="text-xl font-bold text-yellow-500 mb-5">View your application status</h2>
        @else
            <h2 class="text-xl font-bold text-yellow-500 mb-5"><i class="fas fa-user"></i> View students practical
                training application statuses</h2>
        @endif

        <div class="flex flex-col sm:flex-row sm:justify-between items-center mb-4 space-y-4 sm:space-y-0">
            <input type="text" placeholder="Search..."
                class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 w-full sm:w-1/3"
                wire:model.live="search">

        </div>
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
                        <th class="px-4 py-2 text-left">Confirmation status</th>
                        <th class="px-4 py-2 text-left">Viewing status</th>
                        <th class="px-4 py-2 text-left">Approval status</th>
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
                            <td class="px-4 py-2">
                                <!-- Active Confirm Button -->
                                @if ($application->approval_status == 'approved' && $application->confirm_status != 'confirmed')
                                    <button wire:click="confirmPlace({{ $application->id }})"
                                        onclick="confirm('Are you sure you want to perform this action? This action is irreversible.') || event.stopImmediatePropagation()"
                                        class="px-3 py-1 rounded text-white bg-red-500 hover:bg-red-700">
                                        <i class="fas fa-times"></i> Not Confirmed
                                    </button>
                                @else
                                    <!-- Disabled Confirm Button -->
                                    <button class="px-3 py-1 rounded text-white bg-gray-300 cursor-not-allowed"
                                        disabled>
                                        <i
                                            class="{{ $application->confirm_status == 'confirmed' ? 'fas fa-check' : 'fas fa-times' }}"></i>
                                        {{ $application->confirm_status == 'confirmed' ? 'Confirmed' : 'Pending...' }}
                                    </button>
                                @endif
                            </td>

                            <td class="px-4 py-2">
                                <button
                                    onclick="confirm('Are you sure you want to perform this action ? bacause this action is irreversible') || event.stopImmediatePropagation()"
                                    class="px-3 py-1 rounded text-white
                                {{ $application->view_status == 'viewed' ? 'bg-green-500' : 'bg-red-500' }}">
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


                        </tr>
                    @endforeach
                    
                </tbody>

            </table>
        </div>
    </div>
</div>
