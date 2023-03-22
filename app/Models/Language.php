<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'laguage';
    protected $fillable = [
        'id',
        'local_key',
        'name',
    ];
}
