<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentnPaint extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'phone',
        'address',
        'vechiletype',
        'company',
        'model',
        'date',
        'problem',
        
    ];
}
