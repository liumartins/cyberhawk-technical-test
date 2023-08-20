<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function show()
    {
        return view('components.index', [
            'title' => 'Componets List',
            //'turbines' => Turbine::all()->toArray()
        ]);
    }
}
