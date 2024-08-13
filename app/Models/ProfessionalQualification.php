<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfessionalQualification extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'country_id',
        'course',
        'mode_of_learning',
        'institution',
        'issuer',
        'certificate',
        'start_date',
        'end_date',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
