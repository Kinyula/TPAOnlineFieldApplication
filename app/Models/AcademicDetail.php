<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'institute_name',
        'education_level',
        'status',
        'program',
        'registration_number',
        'current_year',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
