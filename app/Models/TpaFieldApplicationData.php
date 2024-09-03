<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TpaFieldApplicationData extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'port_id', 'application_letter', 'view_status', 'approval_status', 'department_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function port()
    {
        return $this->belongsTo(Port::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
