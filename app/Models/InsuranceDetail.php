<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsuranceDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'insurance_company',
        'insurance_card_number',
        'expiration_date',
        'insurance_card_attachment'
    ];
}
