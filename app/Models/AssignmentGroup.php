<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssignmentGroup extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'tpa_field_application_data_id','group','allocation_status'];

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function tpaFieldApplications()
    {
        return $this->belongsTo(TpaFieldApplicationData::class,'tpa_field_application_data_id');
    }
}
