<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkExperience extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'institution',
        'institution_address',
        'job_title',
        'current_occupation',
        'start_date',
        'duties_performed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
