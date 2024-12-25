<?php

namespace App\Http\Controllers\Mechanic;

use App\Http\Controllers\Controller;

class MechanicCreateController extends Controller
{
    public function __invoke()
    {
        return view('mechanic.create');
    }
}
