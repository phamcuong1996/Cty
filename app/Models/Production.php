<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Production extends Model
{
    use SoftDeletes;

    protected $table = 'productions';
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'manufacturing_company',
    ];
    protected $hidden = [
    
    ];
    protected $casts = [
        
    ];
    protected $dates = ['deleted_at'];
}
