<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'department',
        'floor_number',
        'office_name',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function fieldApplications()
    {
        return $this->hasMany(FieldApplicationData::class);
    }
}
