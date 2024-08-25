<div class="container mx-auto p-4">
    <!-- Step Indicator -->
    <div class="flex justify-between items-center mb-8">
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-800 h-2.5 rounded-full" style="width: {{ $stepPercentage }}%;"></div>
        </div>
        <span class="ml-4 text-gray-600">{{ $currentStep }}/{{ $totalSteps }}</span>
    </div>

    <!-- Step Content -->
    <div class="mb-8">
        @switch($currentStep)
            @case(1)
                @livewire('student.student-files.view-student-personal-details-livewire')
                @break
            @case(2)
                @livewire('student.student-files.view-student-contact-details-livewire')
                @break
            @case(3)
                @livewire('student.student-files.view-student-academic-details-livewire')
                @break
            @case(4)
                @livewire('student.student-files.view-student-referee-details-livewire')
                @break
            @case(5)
                @livewire('student.student-files.view-student-training-and-workshop-details-livewire')
                @break
            @case(6)
                @livewire('student.student-files.view-student-professional-qualification-details-livewire')
                @break
            @case(7)
                @livewire('student.student-files.view-student-project-portfolio-details-livewire')
                @break
            @case(8)
                @livewire('student.student-files.view-student-other-attachment-details-livewire')
                @break
            @case(9)
                @livewire('student.student-files.view-student-declaration-details-livewire')
                @break
        @endswitch
    </div>

    <br>
    <!-- Navigation Buttons -->
    <div class="flex justify-between">
        @if ($currentStep > 1)
            <button wire:click="previousStep" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-lg">
                Previous
                <i class="fas fa-arrow-left"></i>
            </button>
        @else
            <div></div>
        @endif

        @if ($currentStep < $totalSteps)
            <button wire:click="nextStep" class="bg-blue-800 text-white px-4 py-2 rounded-lg">
                Next
                <i class="fas fa-arrow-right"></i>
            </button>
        @else

        @endif
    </div>
</div>
