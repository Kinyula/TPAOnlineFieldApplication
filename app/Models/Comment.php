<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'group_task_id', 'comment'];

    public function assignmentGroup()
    {
        return $this->belongsTo(AssignmentGroup::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function groupTask()
    {
        return $this->belongsTo(GroupTask::class);
    }
}
