<div class="relative min-h-screen flex flex-col">
    <!-- Progress Bar -->
    @livewire('tpa.field-application-files.field-application-progressbar-livewire', [], key('progress-bar'))

    <!-- Form Content -->
    <div class="flex-grow p-4">
        <!-- Step 1: Personal Details Form -->
        <div @if ($currentStep === 1) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-personal-details-form-livewire')
        </div>

        <!-- Step 2: Contact Details Form -->
        <div @if ($currentStep === 2) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-contact-form-livewire')
        </div>

        <!-- Step 3: Academic Details Form -->
        <div @if ($currentStep === 3) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-academic-form-livewire')
        </div>

        <!-- Step 4: Language Proficiency Details Form -->
        <div @if ($currentStep === 4) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-language-proficiency-form-livewire')
        </div>

        <!-- Step 5: Apply Form -->
        <div @if ($currentStep === 5) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.tpa-field-application-form-livewire')
        </div>
    </div>

    <!-- Step Indicator -->
    <div class="bg-gray-100 p-4 rounded-t-lg border-b border-gray-300">
        <div class="flex justify-between items-center flex-wrap">
            @foreach (range(1, 5) as $step) <!-- Adjusted to 5 steps -->
                <div class="flex-1 text-center">
                    <div class="relative flex justify-center">
                        <div class="@if($currentStep >= $step) bg-blue-800 text-white @else bg-gray-300 text-gray-700 @endif
                                    rounded-full h-8 w-8 md:h-10 md:w-10 flex items-center justify-center mx-auto">
                            {{ $step }}
                        </div>
                        @if ($step != 5) <!-- Adjusted to 5 steps -->
                            <div class="absolute top-1/2 left-full w-full h-0.5
                                        bg-gray-300 @if($currentStep >= $step) bg-blue-800 @endif"></div>
                        @endif
                    </div>
                    <div class="text-xs mt-2 md:text-sm">
                        @switch($step)
                            @case(1)
                                Personal Details
                                @break
                            @case(2)
                                Contact Details
                                @break
                            @case(3)
                                Academic Details
                                @break
                            @case(4)
                                Language Proficiency
                                @break
                            @case(5)
                                Apply
                                @break
                        @endswitch
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex justify-between mt-4 p-4 bg-gray-100 border-t border-gray-300">
        <button wire:click="previousStep" class="bg-gray-500 text-white px-4 py-2 rounded flex items-center"
            @if ($currentStep <= 1) disabled @endif>
            <i class="fas fa-chevron-left mr-2"></i>
            Previous
        </button>
        <button wire:click="nextStep" class="bg-blue-800 text-white px-4 py-2 rounded flex items-center"
            @if ($currentStep >= 5 || ($progress < 50 && $currentStep == 5)) disabled @endif>
            <i class="fas fa-chevron-right mr-2"></i>
            Next
        </button>
    </div>
</div>
