<?php

namespace App\Http\Controllers\Mechanic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mechanics\StoreMechanicRequest;
use App\Services\Mechanics\MechanicService;

class MechanicStoreController extends Controller
{
    public function __construct(protected MechanicService $mechanicService)
    {
    }

    public function __invoke(StoreMechanicRequest $request)
    {
        $this->mechanicService->create($request->validated());
        return redirect()->route('mechanics.index');
    }

}
