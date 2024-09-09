<?php

namespace App\Livewire\Tpa;

use App\Models\AssignmentGroup;
use App\Models\TpaFieldApplicationData;
use Livewire\Component;
use Livewire\WithPagination;

class ViewStudentsGroupedByDepartmentsLivewire extends Component
{
    use WithPagination;

    public $selectedStudents = []; // Array to hold selected student IDs
    public $group;
    public $data;
    public $searchTerm = ''; // Search term for filtering students

    public function mount()
    {
        $this->data = AssignmentGroup::where('allocation_status', 'assigned')->exists();
    }

    protected $rules = [
        'selectedStudents' => 'required|array|min:1',
        'group' => 'required|string',
    ];

    public function updatedSearchTerm()
    {
        // Reset pagination when search term is updated
        $this->resetPage();
    }

    public function createGroups()
    {
        $this->validate();

        foreach ($this->selectedStudents as $studentId) {
            if (AssignmentGroup::where('tpa_field_application_data_id', $studentId)->exists()) {
                session()->flash('error', 'Some students are already assigned to a group.');
                return;
            }

            AssignmentGroup::create([
                'user_id' => auth()->id(),
                'tpa_field_application_data_id' => $studentId,
                'group' => $this->group,
            ]);
            // Update allocation status of the student
            $this->updateAllocationStatus();
        }

        session()->flash('field_spaces', 'Groups created successfully.');

        // Reset the form
        $this->reset(['selectedStudents', 'group']);
    }

    public function updateAllocationStatus()
    {
      $updateAllocationStatus = TpaFieldApplicationData::findOrFail($this->selectedStudents);
      foreach ($updateAllocationStatus as $student) {
        $student->allocation_status = 'assigned';
        $student->update();
      }

    }
    public function render()
    {
        // Filter students based on the search term
        $students = TpaFieldApplicationData::with(['user'])
            ->where('department_id', auth()->user()->extraUserInfo->department_id)
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('last_name', 'like', '%' . $this->searchTerm . '%');
            })
            ->paginate(15);

        return view('livewire.tpa.view-students-grouped-by-departments-livewire', [
            'students' => $students,
        ]);
    }
}
