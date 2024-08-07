<?php

namespace App\Livewire\Student;

use App\Models\User;
use Livewire\Component;

class StudentLayoutLivewire extends Component
{
    public function render()
    {
        return view('livewire.student.student-layout-livewire', [
            'profileImage' => User::where('id', auth()->user()->id)->first(),

        ]);
    }
}
