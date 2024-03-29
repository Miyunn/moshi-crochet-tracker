<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasicConfig;

class BasicConfigController extends Controller
{
    public function edit()
    {
        $basicConfig = BasicConfig::first();

        return view('config.edit', [
            'basicConfig' => $basicConfig
        ]);
    }

    public function update()
    {
        $basicConfig = BasicConfig::first();

        $basicConfig->update(request()->validate([
            'yarn_delivery_price' => 'required|numeric',
            'hourly_rate' => 'required|numeric',
            'default_package_cost' => 'required|numeric',
            'is_active' => 'required|boolean',
        ]));

        return redirect()->route('config.edit')->with('status', 'config-updated');
    }
}
