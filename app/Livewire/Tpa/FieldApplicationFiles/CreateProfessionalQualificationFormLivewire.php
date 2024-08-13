<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\ProfessionalQualification;
use Livewire\Component;

class CreateProfessionalQualificationFormLivewire extends Component
{
    public $data;

    public function mount()
    {
        $this->data = ProfessionalQualification::where('user_id', auth()->user()->id)->exists();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-professional-qualification-form-livewire');
    }
}
