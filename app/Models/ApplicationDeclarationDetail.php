<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicationDeclarationDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'declaration_text',
        'signature',
        'declaration_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
