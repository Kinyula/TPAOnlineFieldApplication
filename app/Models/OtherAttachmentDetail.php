<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherAttachmentDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'attachment_name',
        'attachment_file'
    ];
}
