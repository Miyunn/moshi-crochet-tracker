<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yarn extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'price',
        'supplier',
        'enabled'
    ];

    protected $table = 'yarn';
}
