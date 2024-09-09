<?php

namespace App\Livewire\Tpa;

use App\Models\AssignmentGroup;
use App\Models\TpaFieldApplicationData;
use Livewire\Component;
use Livewire\WithPagination;

class ViewGroupsLivewire extends Component
{
    use WithPagination;

    public $search = ''; // For search input

    // Method to toggle assignment status
    public function toggleAssign($applicationId)
    {
        $application = TpaFieldApplicationData::find($applicationId);
        $application->allocation_status = !$application->allocation_status; // Toggle the status
        $application->save(); // Save the updated status
    }

    public function render()
    {
        // Fetch groups along with user and tpaFieldApplications
        $groups = AssignmentGroup::with(['tpaFieldApplications.user'])
            ->where(function ($query) {
                $query->where('group', 'like', '%' . $this->search . '%') // Search by group name
                    ->orWhereHas('tpaFieldApplications.user', function ($query) {
                        $query->where('first_name', 'like', '%' . $this->search . '%') // Search by first name
                            ->orWhere('last_name', 'like', '%' . $this->search . '%');  // Search by last name
                    });
            })
            ->paginate(15); // Pagination

        return view('livewire.tpa.view-groups-livewire', [
            'groups' => $groups,
        ]);
    }
}
