<?php

namespace App\Livewire\Tpa\FieldApplicationFiles;

use App\Models\ApplicationDeclarationDetail;
use Livewire\Component;

class CreateDeclarationDetailsFormLivewire extends Component
{
    public $data;

    public function mount(){
        $this->data = ApplicationDeclarationDetail::where('user_id', auth()->user()->id)->exists();
    }

    public function render()
    {
        return view('livewire.tpa.field-application-files.create-declaration-details-form-livewire');
    }
}
