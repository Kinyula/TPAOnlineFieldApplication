<div class="relative min-h-screen flex flex-col">
    <!-- Progress Bar -->
    @livewire('tpa.field-application-files.field-application-progressbar-livewire', [], key('progress-bar'))

    <!-- Form Content -->
    <div class="flex-grow">
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

        <!-- Step 4: Skill Experience Details Form -->
        <div @if ($currentStep === 4) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-skill-experince-form-livewire')
        </div>

        <!-- Step 5: Project Portfolio Details Form -->
        <div @if ($currentStep === 5) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-project-portfolio-form-livewire')
        </div>

        <!-- Step 6: Language Proficiency Details Form -->
        <div @if ($currentStep === 6) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-language-proficiency-form-livewire')
        </div>

        <!-- Step 7: Referee Details Form -->
        <div @if ($currentStep === 7) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-referee-form-livewire')
        </div>

        <!-- Step 8: Professional Qualifications Details Form -->
        <div @if ($currentStep === 8) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-professional-qualification-form-livewire')
        </div>

        <!-- Step 9: Training and Workshop Details Form -->
        <div @if ($currentStep === 9) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-training-and-workshop-form-livewire')
        </div>

        <!-- Step 10: Working Experience Form -->
        <div @if ($currentStep === 10) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-working-experience-form-livewire')
        </div>

        <!-- Step 11: Other Attachment Details Form -->
        <div @if ($currentStep === 11) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-other-attachments-livewire')
        </div>

        <!-- Step 12: Insurance Details Form -->
        <div @if ($currentStep === 12) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-insurance-details-form-livewire')
        </div>

        <!-- Step 13: Publication Details Form -->
        <div @if ($currentStep === 13) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-publication-details-form-livewire')
        </div>

        <!-- Step 14: Declaration Details Form -->
        <div @if ($currentStep === 14) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.create-declaration-details-form-livewire')
        </div>

        <!-- Step 15: Apply Form (only show if progress >= 50%) -->
        <div @if ($currentStep === 15) style="display:block;" @else style="display:none;" @endif>
            @livewire('tpa.field-application-files.apply-field-livewire')
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
            @if ($currentStep >= $totalSteps || ($progress < 50 && $currentStep == 14)) disabled @endif>
            <i class="fas fa-chevron-right mr-2"></i>
            Next
        </button>
    </div>
</div>
