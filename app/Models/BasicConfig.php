<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'yarn_delivery_price',
        'hourly_rate',
        'default_package_cost',
        'is_active'
    ];

    protected $table = 'basic_config';
}
