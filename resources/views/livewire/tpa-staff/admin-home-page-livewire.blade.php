<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

        <!-- Departments -->
        <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
            <div class="flex flex-col items-center">
                <i class="fas fa-building text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                <h4 class="font-weight-bold uppercase text-center">
                    Departments
                </h4>
            </div>
            <div class="mt-4 text-center">
                <span class="font-weight-bold text-yellow-500">Total: </span>
                <span class="font-weight-bold text-blue-800">{{ $departments ?? 0 }}</span>
            </div>
        </div>

        <!-- Directorates -->
        <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
            <div class="flex flex-col items-center">
                <i class="fas fa-sitemap text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                <h4 class="font-weight-bold uppercase text-center">
                    Directorates
                </h4>
            </div>
            <div class="mt-4 text-center">
                <span class="font-weight-bold text-yellow-500">Total: </span>
                <span class="font-weight-bold text-blue-800">{{ $directorates ?? 0 }}</span>
            </div>
        </div>

        <!-- Human Resources (HR) -->
        <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
            <div class="flex flex-col items-center">
                <i class="fas fa-users text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                <h4 class="font-weight-bold uppercase text-center">
                    Human Resources <br> (HR)
                </h4>
            </div>
            <div class="mt-4 text-center">
                <span class="font-weight-bold text-yellow-500">Total: </span>
                <span class="font-weight-bold text-blue-800">{{ $hr ?? 0 }}</span>
            </div>
        </div>

        <!-- Tpa Supervisors -->
        <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300">
            <div class="flex flex-col items-center">
                <i class="fas fa-users text-4xl mb-3 text-yellow-500"></i> <!-- Larger Icon at the Top -->
                <h4 class="font-weight-bold uppercase text-center">
                    TPA Supervisors
                </h4>
            </div>
            <div class="mt-4 text-center">
                <span class="font-weight-bold text-yellow-500">Total: </span>
                <span class="font-weight-bold text-blue-800">{{ $supervisors ?? 0 }}</span>
            </div>
        </div>

    </div>
    @livewire('tpa-staff.admin-function.view-staff-livewire')
</div>
