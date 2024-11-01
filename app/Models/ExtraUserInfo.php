<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraUserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'department_id',
        'port_id',
        'check_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function port()
    {
        return $this->belongsTo(Port::class);
    }
}
