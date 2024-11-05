<?php

namespace App\Livewire\Tpa;

use App\Models\AssignmentGroup;
use App\Models\TpaFieldApplicationData;
use Livewire\Component;
use Livewire\WithPagination;

class ViewGroupsLivewire extends Component
{
    use WithPagination;

    public $search = '';

    public function toggleAssign($applicationId)
    {
        $application = TpaFieldApplicationData::find($applicationId);

        if ($application->allocation_status === 'assigned') {
            $application->allocation_status = 'unassigned';
        } else {
            $application->allocation_status = 'assigned';
        }

        $application->save();
    }


    public function render()
    {

        $groups = AssignmentGroup::with(['tpaFieldApplications.user'])
            ->where(function ($query) {
                $query->where('group', 'like', '%' . $this->search . '%')
                    ->orWhereHas('tpaFieldApplications.user', function ($query) {
                        $query->where('first_name', 'like', '%' . $this->search . '%')
                            ->orWhere('last_name', 'like', '%' . $this->search . '%');
                    });
            })
            ->paginate(15);

        return view('livewire.tpa.view-groups-livewire', [
            'groups' => $groups,
        ]);
    }
}
