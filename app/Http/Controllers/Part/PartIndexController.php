<?php

namespace App\Http\Controllers\Part;

use App\Http\Controllers\Controller;
use App\Services\Parts\PartService;

class PartIndexController extends Controller
{
    public function __construct(protected PartService $partService)
    {
    }

    public function __invoke()
    {
        $parts = $this->partService->all();
        return view('part.index', compact('parts'));
    }
}
