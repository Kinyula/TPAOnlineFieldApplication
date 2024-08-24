<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['department_id', 'module_name'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function deadline()
    {
        return $this->hasOne(Deadline::class);
    }
}
