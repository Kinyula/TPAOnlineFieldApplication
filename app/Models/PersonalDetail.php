<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'gender',
        'date_of_birth',
        'disability_status',
        'nida_number',
        'marital_status',
        'professionalism_title',
        'designation',
        'years_of_experience',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
