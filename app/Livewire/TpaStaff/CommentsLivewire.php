<?php

namespace App\Livewire\TpaStaff;

use App\Models\AssignmentGroup;
use Livewire\Component;
use App\Models\Comment;

class CommentsLivewire extends Component
{
    public $comment;
    public $group;

    protected $rules = [
        'comment' => 'required|string|max:500',
        'group' => 'required|exists:assignment_groups,id', // Adjusted to match the property name
    ];

    public function submitComment()
    {
        $this->validate();

        Comment::create([
            'comment' => $this->comment,
            'assignment_group_id' => $this->group,
            'user_id' => auth()->user()->id,
        ]);

        $this->dispatch('comment-created');
        session()->flash('message', 'Comment successfully created.');
        $this->reset(['comment', 'group']); // Adjusted to match the property name
    }

    public function render()
    {
        // Fetch distinct assignment groups based on ID and group name
        $assignmentGroups = AssignmentGroup::selectRaw('MIN(id) as id, `group`')
            ->groupBy('group')
            ->get();

        return view('livewire.tpa-staff.comments-livewire', [
            'assignmentGroups' => $assignmentGroups,
        ]);
    }
}