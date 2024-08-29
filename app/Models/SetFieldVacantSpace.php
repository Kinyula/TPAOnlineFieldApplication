<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SetFieldVacantSpace extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'department_id',
        'vacant_space'
    ];
}
