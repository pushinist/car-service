<?php

namespace App\Http\Controllers\Car;

use App\Services\Clients\ClientService;

class CarCreateController
{
    public function __construct(protected ClientService $clientService)
    {
    }

    public function __invoke()
    {
        $clients = $this->clientService->all();
        return view('car.create', compact('clients'));
    }
}
