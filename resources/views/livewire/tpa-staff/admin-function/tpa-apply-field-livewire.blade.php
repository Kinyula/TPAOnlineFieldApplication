<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

        <!-- Software Development -->
        <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
            <div class="flex flex-col items-center">
                <i class="fas fa-laptop-code text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                <h4 class="font-weight-bold uppercase text-center">
                    Information Communication Technology ( ICT )
                </h4>
            </div>
            <div class="mt-4 text-center">

                @if (
                    $softwareDevelopmentDeadline &&
                        \Carbon\Carbon::now()->greaterThan(\Carbon\Carbon::parse($softwareDevelopmentDeadline->deadline_date)))
                    <span class="font-weight-bold text-gray-500">Deadline Passed</span>
                @else
                    <a href="{{ asset('TPA/view-software-development-sub-modules') }}">
                        <span class="font-weight-bold text-yellow-500">Explore more </span>
                        <span class="font-weight-bold text-blue-800"><i class="fas fa-arrow-right"></i></span>
                    </a>
                @endif

            </div>
            <!-- Deadline -->
            <div class="mt-4 text-center">
                <span
                    class="font-weight-bold {{ \Carbon\Carbon::now()->lessThanOrEqualTo(\Carbon\Carbon::parse($softwareDevelopmentDeadline->deadline_date)) ? 'text-green-700' : 'text-red-500' }}">
                    <i class="fas fa-calendar-alt"></i>
                    Deadline:
                    {{ $softwareDevelopmentDeadline->deadline_date ? \Carbon\Carbon::parse($softwareDevelopmentDeadline->deadline_date)->format('F j, Y') : 'N/A' }}
                </span>
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
                @if ($networkingDeadline && \Carbon\Carbon::now()->greaterThan(\Carbon\Carbon::parse($networkingDeadline->deadline_date)))
                    <span class="font-weight-bold text-gray-500">Deadline Passed</span>
                @else
                    <a href="{{ asset('TPA/view-networking-sub-modules') }}">
                        <span class="font-weight-bold text-yellow-500">Explore more</span>
                        <span class="font-weight-bold text-blue-800"><i class="fas fa-arrow-right"></i></span>
                    </a>
                @endif
            </div>
            <!-- Deadline -->
            <div class="mt-4 text-center">
                @if($networkingDeadline)
                    <span class="font-weight-bold {{ \Carbon\Carbon::now()->lessThanOrEqualTo(\Carbon\Carbon::parse($networkingDeadline->deadline_date)) ? 'text-green-700' : 'text-red-500' }}">
                        <i class="fas fa-calendar-alt"></i>
                        Deadline: {{ \Carbon\Carbon::parse($networkingDeadline->deadline_date)->format('F j, Y') }}
                    </span>
                @else
                    <span class="font-weight-bold text-gray-500">
                        <i class="fas fa-calendar-alt"></i> Deadline: N/A
                    </span>
                @endif
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
                @if (\Carbon\Carbon::now()->lessThanOrEqualTo(\Carbon\Carbon::parse($marketingDeadline)))
                    <a href="">
                        <span class="font-weight-bold text-yellow-500">Explore more </span>
                        <span class="font-weight-bold text-blue-800"><i class="fas fa-arrow-right"></i></span>
                    </a>
                @else
                    <span class="font-weight-bold text-gray-500">Deadline Passed</span>
                @endif
            </div>
            <!-- Deadline -->
            <div class="mt-4 text-center">
                <span
                    class="font-weight-bold {{ \Carbon\Carbon::now()->lessThanOrEqualTo(\Carbon\Carbon::parse($marketingDeadline)) ? 'text-green-700' : 'text-red-500' }}">
                    <i class="fas fa-calendar-alt"></i> Deadline:
                    {{ $marketingDeadline ? \Carbon\Carbon::parse($marketingDeadline)->format('F j, Y') : 'N/A' }}
                </span>
            </div>
        </div>

    </div>
</div>
