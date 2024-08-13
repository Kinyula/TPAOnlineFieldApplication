<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingAndWorkshop extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'training_name',
        'training_institution',
        'training_certificate',
        'start_date',
        'end_date',
        'training_description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
