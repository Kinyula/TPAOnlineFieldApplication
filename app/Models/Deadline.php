<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deadline extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['module_id', 'deadline_date'];

    public function modules()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
}


