<?php

namespace App\Http\Controllers\Part;

use App\Http\Controllers\Controller;
use App\Services\Parts\PartService;

class PartCreateController extends Controller
{
    public function __invoke()
    {
        return view('part.create');
    }
}
