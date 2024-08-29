<?php

namespace App\Livewire\Tpa;

use App\Models\TpaFieldApplicationData;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewTpaFieldApplicationsLivewire extends Component
{
    public $applications;

    public function mount()
    {
        $this->applications = TpaFieldApplicationData::with(['user', 'department'])->where('user_id', '=', auth()->user()->id)->get();
    }

    public function confirmPlace($id)
    {
        $application = TpaFieldApplicationData::find($id);
        $application->confirm_status = 'confirmed';
        $application->update();

        $this->dispatch('confirm-status')   ;
        // session()->flash('confirm', 'Confirmation status changed to confirmed successfully!');
    }

    #[On('confirm-status')]
    #[On('application-submitted')]
    public function render()
    {
        return view('livewire.tpa.view-tpa-field-applications-livewire');
    }

}
