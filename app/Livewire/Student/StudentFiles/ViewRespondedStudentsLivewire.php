<?php

namespace App\Livewire\Student\StudentFiles;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ResponseLetter;

class ViewRespondedStudentsLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedApplications = [];
    public $selectAll = false;

    protected $queryString = ['search'];

    public function updatedSelectAll($value)
    {
        $this->selectedApplications = $value ? ResponseLetter::pluck('id')->toArray() : [];
    }

    public function deleteSelected()
    {
        ResponseLetter::whereIn('id', $this->selectedApplications)->delete();
        $this->selectedApplications = [];
        $this->selectAll = false;
    }

    public function render()
    {
        $applications = ResponseLetter::with('user')
            ->when($this->search, function ($query) {
                $query->whereHas('user', function ($userQuery) {
                    $userQuery->where('last_name', 'like', '%' . $this->search . '%')
                        ->orWhere('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('phone_number', 'like', '%' . $this->search . '%');
                });
            })
            ->paginate(10);

        return view('livewire.student.student-files.view-responded-students-livewire', compact('applications'));
    }
}
