<div>

    <div class="card-box mb-30 p-3">
        <span class="text-xl font-bold text-yellow-500">Sub-Modules and Their Parent Modules for internship applications</span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($visibleModules as $subModule)
        <!-- Sub-Module Card -->
        <div class="card-box mb-6 p-4 w-full transition-transform transform hover:scale-105 duration-300 bg-white shadow-lg rounded-lg">
            <div class="flex flex-col items-center">
                <!-- Sub-Module Name -->
                <h4 class="font-bold uppercase text-center text-blue-800">{{ $subModule->sub_module }}</h4>
            </div>

            <!-- Parent Module Name -->
            <div class="mt-4 text-center">
                <h5 class="text-yellow-500 font-semibold">Parent Module:</h5>
                <span class="text-gray-800">{{ $subModule->modules->module_name }}</span>
            </div>
        </div>
        @endforeach
    </div>

    @if ($modules->count() > $visibleCount)
    <div class="mt-6 text-center">
        <button wire:click="showMore" class="px-4 py-2 bg-blue-800 text-white rounded-lg hover:bg-blue-900">
            <i class="fas fa-plus px-1"></i>
            Show More
        </button>
    </div>
    @endif


</div>
