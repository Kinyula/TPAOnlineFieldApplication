<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillExperience extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'skill_category',
        'skill_level',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
