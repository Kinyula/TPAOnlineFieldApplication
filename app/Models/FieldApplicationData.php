<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FieldApplicationData extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'port_id', 'module_id', 'sub_module_id', 'application_letter', 'confirm_status', 'view_status', 'approval_status', 'department_id'];

    public function subModule()
    {
        return $this->belongsTo(SubModule::class);
    }

    public function modules()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function search($search)
    {
        return self::where('application_letter', 'LIKE', '%' . $search . '%')
            ->orWhere('confirm_status', 'LIKE', '%' . $search . '%')
            ->orWhere('view_status', 'LIKE', '%' . $search . '%')
            ->orWhere('approval_status', 'LIKE', '%' . $search . '%');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
