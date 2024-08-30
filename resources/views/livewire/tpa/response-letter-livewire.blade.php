<div>
    <div
        class="card-box mb-30 p-6 bg-white shadow-md rounded-lg flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-6">
        <img src="{{ asset('storage/HomeImages/coat-of-arms-2.png') }}" alt="TPA Logo" class="w-16 h-16 object-cover">


        <h2 class="text-center md:text-left text-2xl font-bold text-gray-800">
            View response letter
        </h2>

        <img src="{{ asset('storage/HomeImages/real-tpa.png') }}" alt="Coat of Arms"
            class="w-18 h-16 object-cover rounded">
    </div>

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
                @foreach ($students as $student)
                    @if (auth()->user()->id == $student->recipient)
                        <tr class="border-b">
                            <td class="py-4 px-6 text-xs sm:text-sm md:text-base">{{ $student->user->first_name }}
                            </td>
                            <td class="py-4 px-6 text-xs sm:text-sm md:text-base">{{ $student->user->last_name }}
                            </td>
                            <td class="py-4 px-6 text-xs sm:text-sm md:text-base">{{ $student->user->position }}
                            </td>
                            <td class="py-4 px-6 text-xs sm:text-sm md:text-base">

                                @if (auth()->user()->tpaFieldApplications->approval_status == 'approved' &&
                                        auth()->user()->tpaFieldApplications->confirm_status == 'confirmed')
                                    <button wire:click="generatePdf('{{ $student->id }}')"
                                        class="px-4 py-2 bg-yellow-500 text-white rounded-lg transition cursor-pointer hover:bg-yellow-600">
                                        Download PDF
                                    </button>
                                @else
                                    <button disabled wire:click="generatePdf('{{ $student->id }}')"
                                        class="px-4 py-2 bg-slate-300 text-white rounded-lg transition cursor-not-allowed">
                                        Download PDF
                                    </button>
                                @endif



                            </td>
                        </tr>
                    @else
                    @endif
                @endforeach
            </tbody>


        </table>
    </div>
</div>
