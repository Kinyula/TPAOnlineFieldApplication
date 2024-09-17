<?php

namespace App\Livewire\TpaStaff;

use Livewire\Component;
use App\Models\Comment;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class ViewCommentsLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $showTrashed = false;
    public $editingComment = false;
    public $editCommentId = null;
    public $editCommentText = '';

    #[On('comment-created')]
    public function render()
    {
        $query = Comment::query()
            ->with(['user','assignmentGroup'])
            ->when($this->search, function ($query) {
                $query->whereHas('assignmentGroup', function ($query) {
                    $query->where('group', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->showTrashed, function ($query) {
                $query->onlyTrashed();
            }, function ($query) {
                $query->latest();
            })
            ->paginate(5);

        return view('livewire.tpa-staff.view-comments-livewire', [
            'comments' => $query,
        ]);
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->delete();
            session()->flash('message', 'Comment successfully deleted.');
        }
    }

    public function restoreComment($id)
    {
        $comment = Comment::withTrashed()->find($id);
        if ($comment) {
            $comment->restore();
            session()->flash('message', 'Comment successfully restored.');
        }
    }

    public function editComment($id)
    {
        $this->editCommentId = $id;
        $comment = Comment::find($id);
        $this->editCommentText = $comment ? $comment->comment : '';
        $this->editingComment = true;
    }

    public function updateComment()
    {
        $comment = Comment::find($this->editCommentId);
        if ($comment) {
            $comment->update(['comment' => $this->editCommentText]);
            $this->editingComment = false;
            session()->flash('message', 'Comment successfully updated.');
        }
    }

    public function cancelEdit()
    {
        $this->editingComment = false;
    }

    public function toggleTrashed()
    {
        $this->showTrashed = !$this->showTrashed;
    }
}
