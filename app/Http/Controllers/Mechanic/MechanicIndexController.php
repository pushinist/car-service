<?php

namespace App\Http\Controllers\Mechanic;

use App\Http\Controllers\Controller;
use App\Services\Clients\ClientService;
use App\Services\Mechanics\MechanicService;

class MechanicIndexController extends Controller
{
    public function __construct(protected MechanicService $mechanicService)
    {
    }

    public function __invoke()
    {
        $mechanics = $this->mechanicService->all();
        return view('mechanic.index', compact('mechanics'));
    }
}
