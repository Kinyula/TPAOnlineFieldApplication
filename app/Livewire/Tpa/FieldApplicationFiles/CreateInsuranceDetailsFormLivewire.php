<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\InsuranceDetail;
use Livewire\Component;

class CreateInsuranceDetailsFormLivewire extends Component
{
    public $data;

    public function mount(){
        $this->data = InsuranceDetail::where('user_id', auth()->user()->id)->exists();
    }
    public function render()
    {
        return view('livewire.tpa.field-application-files.create-insurance-details-form-livewire');
    }
}
