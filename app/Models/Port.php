<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Port extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['port_name', 'country_id', 'region_id', 'district_id', 'ward_id'];

    public function tpaFieldData()
    {
        return $this->hasMany(TpaFieldApplicationData::class, 'port_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
