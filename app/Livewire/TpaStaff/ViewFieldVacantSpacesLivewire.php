<?php

namespace App\Livewire\TpaStaff;

use Livewire\Component;
use App\Models\SetFieldVacantSpace; // Use the correct model
use App\Models\TpaFieldApplicationData;
use Carbon\Carbon;

class ViewFieldVacantSpacesLivewire extends Component
{
    public $vacantSpaces;
    public $marketingVacantSpaces;
    public $applicants;

    public function mount()
    {
        $this->applicants = TpaFieldApplicationData::count();
        $this->calculateVacantSpaces();
    }

    public function calculateVacantSpaces()
    {
        // Fetch total and occupied spaces from the SetFieldVacantSpace model
        if (auth()->user()->position == 'Human Resource ( HR )') {
            $totalSpaces = SetFieldVacantSpace::where('department_id', '1')->sum('vacant_space'); // Adjust field names as needed
            $occupiedSpaces = TpaFieldApplicationData::where('department_id', '1')->count(); // Adjust field names as needed

            $this->vacantSpaces = $totalSpaces - $occupiedSpaces;

            $totalSpaces = SetFieldVacantSpace::where('department_id', '2')->sum('vacant_space'); // Adjust field names as needed
            $occupiedSpaces = TpaFieldApplicationData::where('department_id', '2')->count(); // Adjust field names as needed

            $this->marketingVacantSpaces = $totalSpaces - $occupiedSpaces;
        } else {
        }
    }

    public function render()
    {
        return view('livewire.tpa-staff.view-field-vacant-spaces-livewire');
    }
}
