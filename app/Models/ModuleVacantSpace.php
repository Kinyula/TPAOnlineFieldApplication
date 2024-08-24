<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModuleVacantSpace extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'module_id', 'vacant_space'];

    public function modules()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
