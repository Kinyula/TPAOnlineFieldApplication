<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ward extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'district_id',
        'ward'
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
