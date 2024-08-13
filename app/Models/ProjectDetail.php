<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'project_name',
        'start_date',
        'end_date',
        'project_url',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
