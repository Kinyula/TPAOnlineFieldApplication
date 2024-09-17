<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupTask extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'assignment_group_id', 'task'];

    public function assignmentGroup()
    {
        return $this->belongsTo(AssignmentGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
