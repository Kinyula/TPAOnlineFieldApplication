<div class="relative min-h-screen flex flex-col">
    <!-- Progress Bar -->
    @livewire('tpa.internship-application-files.internship-application-progress-bar-livewire', [], key('progress-bar'))

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

        <!-- Step 5: Referee details -->
        <div @if ($currentStep === 5) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-referee-form-livewire')
        </div>

        <!-- Step 6: Skill experience details -->
        <div @if ($currentStep === 6) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-skill-experince-form-livewire')
        </div>

        <!-- Step 7: Professional Qualification details -->
        <div @if ($currentStep === 7) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-professional-qualification-form-livewire')
        </div>

        <!-- Step 8: Project Portfolio details -->
        <div @if ($currentStep === 8) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-project-portfolio-form-livewire')
        </div>

        <!-- Step 9: Working experience details -->
        <div @if ($currentStep === 9) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-working-experience-form-livewire')
        </div>

        <!-- Step 10: Training and Workshop  details -->
        <div @if ($currentStep === 10) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-training-and-workshop-form-livewire')
        </div>

        <!-- Step 11: Insurance  details -->
        <div @if ($currentStep === 11) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-insurance-details-form-livewire')
        </div>

        <!-- Step 12: Publication details -->
        <div @if ($currentStep === 12) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-publication-details-form-livewire')
        </div>


        <!-- Step 13: Other Attachments details -->
        <div @if ($currentStep === 13) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-other-attachments-livewire')
        </div>

        <!-- Step 14: Declaration details -->
        <div @if ($currentStep === 14) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-declaration-details-form-livewire')
        </div>


        <!-- Step 15: Apply Form -->
        <div @if ($currentStep === 15) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.apply-field-livewire')
        </div>
    </div>

    <!-- Step Indicator -->
    <div class="bg-gray-100 p-4 rounded-t-lg border-b border-gray-300">
        <div class="flex justify-between items-center flex-wrap">
            @foreach (range(1, 15) as $step)
                <!-- Adjusted to 15 steps -->
                <div class="flex-1 text-center">
                    <div class="relative flex justify-center">
                        <div
                            class="@if ($currentStep >= $step) bg-blue-800 text-white @else bg-gray-300 text-gray-700 @endif
                                    rounded-full h-8 w-8 md:h-10 md:w-10 flex items-center justify-center mx-auto">
                            {{ $step }}
                        </div>
                        @if ($step != 15)
                            <!-- Adjusted to 15 steps -->
                            <div
                                class="absolute top-1/2 left-full w-full h-0.5
                                        bg-gray-300 @if ($currentStep >= $step) bg-blue-800 @endif">
                            </div>
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
                                Referee details
                            @break

                            @case(6)
                                Skill Experience details
                            @break

                            @case(7)
                                Professional qualification details
                            @break

                            @case(8)
                                Project Portfolio details
                            @break

                            @case(9)
                                Working Experience
                            @break

                            @case(10)
                                Training & Workshop details
                            @break

                            @case(11)
                                Insurance details
                            @break

                            @case(12)
                                Publication details
                            @break

                            @case(13)
                                Other atachments
                            @break

                            @case(14)
                                Declaration details
                            @break

                            @case(15)
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
            @if ($currentStep >= 15 || ($progress < 50 && $currentStep == 15)) disabled @endif>
            <i class="fas fa-chevron-right mr-2"></i>
            Next
        </button>
    </div>
</div>
