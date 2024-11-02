<div>
    <!-- Step Indicator -->
    <div class="card-box mb-30 p-3">
        <h2 class="mb-2 text-xl font-bold">Step-by-Step View Created Infos</h2>

        <div class="flex items-center mb-6">
            @foreach (range(1, $totalSteps) as $step)
                <div class="flex-1">
                    <div class="relative mb-2">
                        <div class="absolute flex align-center justify-center w-full">
                            <div
                                class="
                                @if ($step <= $currentStep) bg-yellow-500 text-white
                                @else
                                    bg-gray-300 text-gray-500 @endif
                                h-8 w-8 rounded-full text-center leading-8 font-semibold">
                                {{ $step }}
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex-auto border-t-2 transition duration-500 ease-in-out
                        @if ($step < $currentStep) border-yellow-500
                        @else
                            border-gray-300 @endif">
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Step Navigation -->
        <div class="mb-4">
            <button wire:click="previousStep" class="bg-gray-500 text-white px-4 py-2 rounded mr-2"
                @if ($currentStep == 1) disabled @endif>
                <i class="fas fa-arrow-left"></i> Previous
            </button>
            <button wire:click="nextStep" class="bg-yellow-500 text-white px-4 py-2 rounded"
                @if ($currentStep == $totalSteps) disabled @endif>
                Next <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Step 1: Port -->
    <div @if ($currentStep == 1) style="display: block;" @else style="display: none;" @endif class="bg-white">
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View Port Information</h3>
        @livewire('tpa-staff.admin-function.view-port-livewire')
    </div>

    <!-- Step 2: Country -->
    <div @if ($currentStep == 2) style="display: block;" @else style="display: none;" @endif>
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View Country Information</h3>
        @livewire('tpa-staff.admin-function.view-country-livewire')
    </div>

    <!-- Step 3: Region -->
    <div @if ($currentStep == 3) style="display: block;" @else style="display: none;" @endif>
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View Region Information</h3>
        @livewire('tpa-staff.admin-function.view-region-livewire')
    </div>

    <!-- Step 4: District -->
    <div @if ($currentStep == 4) style="display: block;" @else style="display: none;" @endif>
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View District Information</h3>
        @livewire('tpa-staff.admin-function.view-district-livewire')
    </div>

    <!-- Step 5: Ward -->
    <div @if ($currentStep == 5) style="display: block;" @else style="display: none;" @endif>
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View Ward Information</h3>
        @livewire('tpa-staff.admin-function.view-ward-livewire')
    </div>

    <!-- Step 6: Department -->
    <div @if ($currentStep == 6) style="display: block;" @else style="display: none;" @endif>
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View Department Information</h3>
        @livewire('tpa-staff.admin-function.view-department-livewire')
    </div>

    <!-- Step 7: Module -->
    <div @if ($currentStep == 7) style="display: block;" @else style="display: none;" @endif>
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View Module Information</h3>

    </div>

    <!-- Step 8: Sub Module -->
    <div @if ($currentStep == 8) style="display: block;" @else style="display: none;" @endif>
        <h3 class="text-2xl font-bold mb-3 text-yellow-500">View Sub Module Information</h3>

    </div>
</div>
