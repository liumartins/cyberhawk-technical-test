<?php

namespace App\Http\Controllers;

use App\Models\Turbine;
use Illuminate\Http\Request;

class TurbineController extends Controller
{
    public function show()
    {
        
        return view('turbines.index', [
            'title' => 'Turbines List',
            'turbines' => Turbine::all()
        ]);
    }
}
