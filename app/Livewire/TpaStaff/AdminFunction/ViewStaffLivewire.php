<?php

namespace App\Livewire\TpaStaff\AdminFunction;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class ViewStaffLivewire extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.tpa-staff.admin-function.view-staff-livewire', [
            'staff' => User::with(['extraUserInfo'])
                ->where('position', '!=', 'student')
                ->paginate(15),
        ]);
    }
}
