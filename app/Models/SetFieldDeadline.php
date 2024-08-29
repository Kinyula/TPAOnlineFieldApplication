<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SetFieldDeadline extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['department_id', 'deadline_date'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
