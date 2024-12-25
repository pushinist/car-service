<?php

namespace App\Http\Controllers\Mechanic;

use App\Http\Controllers\Controller;
use App\Services\Clients\ClientService;
use App\Services\Mechanics\MechanicService;

class MechanicShowController extends Controller
{
    public function __construct(protected MechanicService $mechanicService)
    {
    }

    public function __invoke($id)
    {
        $mechanic = $this->mechanicService->find($id);
        return view('mechanic.show', compact('mechanic'));
    }
}
