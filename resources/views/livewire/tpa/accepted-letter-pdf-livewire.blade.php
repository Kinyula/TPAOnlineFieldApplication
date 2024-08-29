<div class="flex justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if (auth()->user()->position == 'Human Resource ( HR )')
            <div
                class="card-box mb-30 p-6 bg-white shadow-md rounded-lg flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-6">
                <img src="{{ asset('storage/HomeImages/coat-of-arms-2.png') }}" alt="TPA Logo"
                    class="w-16 h-16 object-cover">
                <h2 class="text-center md:text-left text-2xl font-bold text-gray-800">View students acceptance letters
                </h2>
                <img src="{{ asset('storage/HomeImages/TPA1.png') }}" alt="Coat of Arms"
                    class="w-16 h-16 object-cover rounded">
            </div>
            <form class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4">
                <input type="text" placeholder="Search applications..."
                    class="flex-grow px-4 py-2 mb-5 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 text-black"
                    wire:model.live="search">
                <button wire:click="generateAllPdfs" type="button"
                    class="w-full sm:w-auto px-3 py-1 mb-5 bg-blue-800 text-white font-semibold rounded-md hover:bg-blue-900 transition duration-200">
                    <i class="fas fa-download px-1"></i> Download All Application PDFs
                </button>
            </form>
        @else
            <div
                class="card-box mb-30 p-6 bg-white shadow-md rounded-lg flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-6">
                <img src="{{ asset('storage/HomeImages/coat-of-arms-2.png') }}" alt="TPA Logo"
                    class="w-16 h-16 object-cover">
                <h2 class="text-center md:text-left text-2xl font-bold text-gray-800">View your acceptance letter</h2>
                <img src="{{ asset('storage/HomeImages/TPA1.png') }}" alt="Coat of Arms"
                    class="w-16 h-16 object-cover rounded">
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-yellow-500 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left text-xs sm:text-sm md:text-base">First Name</th>
                        <th class="py-3 px-6 text-left text-xs sm:text-sm md:text-base">Last Name</th>
                        <th class="py-3 px-6 text-left text-xs sm:text-sm md:text-base">Role</th>
                        <th class="py-3 px-6 text-left text-xs sm:text-sm md:text-base">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse ($students as $student)
                        @if ($student->user_id == auth()->user()->id)
                            <tr class="border-b">
                                <td class="py-4 px-6 text-xs sm:text-sm md:text-base">{{ $student->user->first_name }}
                                </td>
                                <td class="py-4 px-6 text-xs sm:text-sm md:text-base">{{ $student->user->last_name }}
                                </td>
                                <td class="py-4 px-6 text-xs sm:text-sm md:text-base">{{ $student->user->position }}
                                </td>
                                <td class="py-4 px-6 text-xs sm:text-sm md:text-base">
                                    @if ($student->confirm_status == 'confirmed' && $student->view_status == 'viewed')
                                        <button wire:click="generatePdf('{{ $student->id }}')"
                                            class="px-4 py-2 bg-yellow-500 text-white rounded-lg transition cursor-pointer hover:bg-yellow-600">
                                            Download PDF
                                        </button>
                                    @else
                                        <button disabled
                                            class="px-4 py-2 bg-slate-300 text-white rounded-lg transition cursor-not-allowed">
                                            Download PDF ( Pending... )
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 px-6 text-center text-xs sm:text-sm md:text-base">No
                                applications found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
