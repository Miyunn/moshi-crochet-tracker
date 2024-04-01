<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yarn;

class YarnController extends Controller
{
    public function index()
    {
        return view('yarn.index', [
            'yarns' => Yarn::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'supplier' => 'required|string',
            'enabled' => 'required|boolean',

        ]);

        $yarn = Yarn::create($request->all());

        return redirect()->route('yarn.index')->with('status', 'yarn-added');
    }
}
