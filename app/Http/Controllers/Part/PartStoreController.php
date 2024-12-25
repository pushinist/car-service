<?php

namespace App\Http\Controllers\Part;

use App\Http\Controllers\Controller;
use App\Http\Requests\Parts\StorePartRequest;
use App\Services\Parts\PartService;

class PartStoreController extends Controller
{
    public function __construct(protected PartService $partService)
    {
    }

    public function __invoke(StorePartRequest $request)
    {
        $this->partService->create($request->validated());
        return redirect()->route('parts.index');
    }
}
