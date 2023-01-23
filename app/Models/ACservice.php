<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ACservice extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'phone',
        'vechiletype',
        'company',
        'model',
        'date',
        'problem',
        
    ];
}
