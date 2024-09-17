<div class="container mx-auto p-4">
    <!-- Menu Bar -->
    <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-8">
        <button wire:click="setStep(1)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 1) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Personal Details
        </button>
        <button wire:click="setStep(2)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 2) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Contact Details
        </button>
        <button wire:click="setStep(3)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 3) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Academic Details
        </button>
        <button wire:click="setStep(4)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 4) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Language proficiency Details
        </button>
         <button wire:click="setStep(5)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 5) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Group information
        </button>
        {{-- <button wire:click="setStep(6)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 6) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Professional Qualification
        </button>
        <button wire:click="setStep(7)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 7) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Project Portfolio
        </button>
        <button wire:click="setStep(8)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 8) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Other Attachments
        </button>
        <button wire:click="setStep(9)"
            class="w-full md:w-auto px-4 py-2 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 @if ($currentStep == 9) bg-blue-800 text-white @else bg-gray-300 text-gray-800 @endif">
            Declaration
        </button>  --}}
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
                @livewire('student.student-files.view-student-language-proficiency-details-livewire')
            @break

             @case(5)
                @livewire('tpa-staff.group-info-livewire')
            @break

            {{-- @case(6)
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
            @break  --}}
        @endswitch
    </div>

</div>
