<?php

namespace App\Livewire\Tpa;

use App\Models\FieldApplicationData;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewApplicationsLivewire extends Component
{
    public $applications;

    public function mount()
    {
        $this->applications = FieldApplicationData::with(['user', 'modules', 'subModule'])->where('user_id', '=', auth()->user()->id)->get();
    }

    public function confirmPlace($id)
    {
        $application = FieldApplicationData::find($id);
        $application->confirm_status = 'confirmed';
        $application->update();

        $this->dispatch('confirm-status')   ;
        // session()->flash('confirm', 'Confirmation status changed to confirmed successfully!');
    }

    #[On('confirm-status')]
    public function render()
    {
        return view('livewire.tpa.view-applications-livewire');
    }
}
