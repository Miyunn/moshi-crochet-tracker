<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yarn;

class YarnController extends Controller
{
    public function store(Request $request)
    {
        'type' => 'required|string';
        'price' => 'required|decimal';
        'supplier' => 'required|string';

        $yarn = Yarn:Create($request->all());

       return redirect()->route('yarn.index')->with('status', 'yarn-added');
    }

}
