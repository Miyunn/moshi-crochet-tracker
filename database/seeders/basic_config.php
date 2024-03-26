<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class basic_config extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('basic_config')->insert([
            'yarn_delivery_price' => 0,
            'hourly_rate' => 0,
            'default_package_cost' => 0,
            'is_active' => 1,
        ]);
    }
}
