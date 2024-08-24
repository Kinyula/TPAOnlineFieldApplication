<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubModule extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['module_id', 'sub_module'];

    public function modules()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }

    public function fieldApplications()
    {
        return $this->hasMany(FieldApplicationData::class);
    }
}
