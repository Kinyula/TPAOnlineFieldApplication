<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class ViewStaffLivewire extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-staff-livewire', [
            'staff' => User::search($this->search)->with(['extraUserInfo'])

                ->where('position', '!=', 'student')
                ->paginate(15),

            'totalStaff' => User::where('position', '!=', 'student')->count(),
        ]);
    }
}
