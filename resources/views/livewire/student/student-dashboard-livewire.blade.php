<div>
    <div class="card-box mb-30 p-3">
        <div class="flex items-center">
            <i class="fas fa-book-open text-3xl text-yellow-500"></i>
            <h3 class="text-xl font-bold ml-2 text-yellow-500">Application Tip!</h3>
        </div>
        <div class="flex gap-2">
            <i class="fas fa-arrow-right mt-1 text-yellow-500"></i>
            <p class="mb-4 text-blue-800">You will be allowed to perform the application only if you have filled at least
                <small class="text-green-600 uppercase font-weight-bold">50%</small> of your information guided by the
                progress bar. If the progress bar is <small
                    class="text-green-600 uppercase font-weight-bold">green</small>, then you will be allowed to apply;
                <small class="text-red-500 uppercase font-weight-bold">else you will not be allowed to apply.</small>
            </p>
        </div>
    </div>

    {{-- @dd($deadline,'  ', $internshipDeadline) --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        <!-- Practical Training Card -->
        <div class="card-box mb-30 p-3 bg-white shadow-md rounded-lg flex flex-col items-center">
            <i class="fas fa-chalkboard-teacher text-3xl mb-2 text-yellow-500"></i>
            <h3 class="text-xl font-bold mb-2 text-yellow-500">Practical Training</h3>
            <small class="text-xl font-bold mb-2 text-red-500">Deadline: {{ $deadline->format('F j , Y ,  h : i A') }}</small>
            <span class="text-blue-900">Tanzania Port Authority provides hands-on training opportunities to help
                individuals gain real-world experience in maritime operations and management, preparing them for careers
                in the port industry.</span>
            @if (!$isDisabled)
                <a href="{{ asset('TPA/field-application') }}"
                    class="mt-4 px-4 py-2 bg-yellow-500 text-white font-bold rounded hover:bg-yellow-600 transition duration-300"
                    onclick="return confirm('Are you sure you want to perform this action?')"> Apply
                </a>
            @else
                <button disabled class="mt-4 px-4 py-2 bg-gray-400 text-white font-bold rounded cursor-not-allowed">
                    Deadline Passed
                </button>
            @endif
        </div>

        <!-- Internship Card -->
        <div class="card-box mb-30 p-3 bg-white shadow-md rounded-lg flex flex-col items-center">
            <i class="fas fa-user-tie text-3xl mb-2 text-yellow-500"></i>
            <h3 class="text-xl font-bold mb-2 text-yellow-500">Internship</h3>
            <small class="text-xl font-bold mb-2 text-red-500">Deadline: {{ $internshipDeadline->format('F j , Y ,  h : i A') }}</small>
            <span class="text-blue-900">Internships at Tanzania Port Authority offer valuable exposure to various
                aspects of port operations, giving students and young professionals a chance to build skills and network
                within the industry.</span>
            @if (!$isInternshipDisabled)
                <a href="{{ asset('TPA/internship-application') }}"
                    class="mt-4 px-4 py-2 bg-yellow-500 text-white font-bold rounded hover:bg-yellow-600 transition duration-300"
                    onclick="return confirm('Are you sure you want to perform this action?')"> Apply
                </a>
            @else
                <button disabled class="mt-4 px-4 py-2 bg-gray-400 text-white font-bold rounded cursor-not-allowed">
                    Deadline Passed
                </button>
            @endif
        </div>

        <!-- Research & Innovation Card -->
        {{-- <div class="card-box mb-30 p-3 bg-white shadow-md rounded-lg flex flex-col items-center">
            <i class="fas fa-rocket text-3xl mb-2 text-yellow-500"></i>
            <h3 class="text-xl font-bold mb-2 text-yellow-500">Research & Innovation</h3>
            <span class="text-blue-900">We invest in research and innovation to enhance port efficiency and safety. Our
                initiatives focus on developing cutting-edge technologies and practices to keep pace with global
                maritime trends.</span>
            @if (!$isDisabled)
                <a href="{{ asset('TPA/research-application') }}"
                    class="mt-4 px-4 py-2 bg-yellow-500 text-white font-bold rounded hover:bg-yellow-600 transition duration-300"
                    onclick="return confirm('Are you sure you want to perform this action?')"> Apply
                </a>
            @else
                <button disabled class="mt-4 px-4 py-2 bg-gray-400 text-white font-bold rounded cursor-not-allowed">
                    Deadline Passed
                </button>
            @endif
        </div> --}}

        <!-- Mentorship Card -->
        {{-- <div class="card-box mb-30 p-3 bg-white shadow-md rounded-lg flex flex-col items-center">
            <i class="fas fa-hands-helping text-3xl mb-2 text-yellow-500"></i>
            <h3 class="text-xl font-bold mb-2 text-yellow-500">Mentorship</h3>
            <span class="text-blue-900">Tanzania Port Authority’s mentorship programs guide and support emerging
                professionals in the maritime sector, fostering growth and leadership through personalized guidance and
                industry insights.</span>
            @if (!$isDisabled)
                <a href="{{ asset('TPA/mentorship-application') }}"
                    class="mt-4 px-4 py-2 bg-yellow-500 text-white font-bold rounded hover:bg-yellow-600 transition duration-300"
                    onclick="return confirm('Are you sure you want to perform this action?')"> Apply
                </a>
            @else
                <button disabled class="mt-4 px-4 py-2 bg-gray-400 text-white font-bold rounded cursor-not-allowed">
                    Deadline Passed
                </button>
            @endif
        </div> --}}
    </div>
</div>
