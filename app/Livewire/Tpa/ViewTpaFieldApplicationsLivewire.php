<?php

namespace App\Livewire\Tpa;

use App\Models\TpaFieldApplicationData;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
class ViewTpaFieldApplicationsLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $applications;
    public $search = '';



    public function confirmPlace($id)
    {
        $application = TpaFieldApplicationData::find($id);
        $application->confirm_status = 'confirmed';
        $application->update();

        $this->dispatch('confirm-status');
        // session()->flash('confirm', 'Confirmation status changed to confirmed successfully!');
    }

    #[On('confirm-status')]
    #[On('application-submitted')]
    
    public function render()
    {
        $userPosition = auth()->user()->position;
        $userId = auth()->user()->id;
    
        $query = TpaFieldApplicationData::with(['user', 'department']);
    
        if (in_array($userPosition, ['Directorate of ICT ( DICT )', 'Directorate of Marketing'])) {
            $query->whereHas('user', function($query) {
                $query->where(function($q) {
                    $q->where('first_name', 'like', '%' . $this->search . '%')
                      ->orWhere('last_name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%');
                });
                
            })->where('confirm_status', 'confirmed');
        } else {
            $query->where('user_id', $userId);
        }
    
        $this->applications = $query->get();
    
        return view('livewire.tpa.view-tpa-field-applications-livewire');
    }
    
}
