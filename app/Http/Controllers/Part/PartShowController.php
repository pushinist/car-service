<?php

namespace App\Http\Controllers\Part;

use App\Http\Controllers\Controller;
use App\Services\Parts\PartService;

class PartShowController extends Controller
{
    public function __construct(protected PartService $partService)
    {
    }

    public function __invoke($id)
    {
        $part = $this->partService->find($id);
        return view('part.show', compact('part'));
    }
}
