<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplyField extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['user_id', 'port_id','application_letter','confirm_status','arrival_status'];
}
