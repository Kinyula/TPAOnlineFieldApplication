<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- ICT Card -->
    <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
        <div class="flex flex-col items-center">
            <i class="fas fa-laptop-code text-4xl mb-3 text-yellow-500"></i>
            <h4 class="font-weight-bold uppercase text-center">
                Information Communication and Technology <br> ( ICT )
            </h4>
        </div>
        <div class="mt-4 text-center">
            @if ($vacantSpaces <= 0)
                <span class="font-weight-bold text-gray-500">No Vacant Spaces</span>
            @else
            @endif
        </div>
        <!-- Vacant Spaces -->
        <div class="mt-4 text-center">
            <span class="font-weight-bold {{ $vacantSpaces > 0 ? 'text-green-700' : 'text-red-500' }}">
                <i class="fas fa-users"></i>
                Vacant Spaces:
                {{ $vacantSpaces }}
            </span>
        </div>
    </div>

    <!-- Marketing Card -->
    <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
        <div class="flex flex-col items-center">
            <i class="fas fa-bullhorn text-4xl mb-3 text-yellow-500"></i> <!-- Marketing Icon -->
            <h4 class="font-weight-bold uppercase text-center">
                Marketing
            </h4>
        </div>
        <div class="mt-4 text-center">
            @if ($marketingVacantSpaces <= 0)
                <span class="font-weight-bold text-gray-500">No Vacant Spaces</span>
            @else
            @endif
        </div>
        <!-- Vacant Spaces -->
        <div class="mt-4 text-center">
            <span class="font-weight-bold {{ $vacantSpaces > 0 ? 'text-green-700' : 'text-red-500' }}">
                <i class="fas fa-users"></i>
                Vacant Spaces:
                {{ $marketingVacantSpaces }}
            </span>
        </div>
    </div>

    <!-- Applicants Card -->
    <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
        <div class="flex flex-col items-center">
            <i class="fas fa-users text-4xl mb-3 text-yellow-500"></i>
            <h4 class="font-weight-bold uppercase text-center">
                Applicants
            </h4>
        </div>
        <div class="mt-4 text-center">
            @if ($applicants <= 0)
                <span class="font-weight-bold text-gray-500">No applicants</span>
            @else
            @endif
        </div>
        <!-- Vacant Spaces -->
        <div class="mt-4 text-center">
            <span class="font-weight-bold {{ $vacantSpaces > 0 ? 'text-green-700' : 'text-red-500' }}">
                <i class="fas fa-users"></i>
                Total:
                {{ $applicants }}
            </span>
        </div>
    </div>
</div>
