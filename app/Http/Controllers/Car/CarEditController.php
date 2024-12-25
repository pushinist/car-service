<?php

namespace App\Http\Controllers\Car;

use App\Services\Clients\ClientService;

class CarEditController
{
    public function __construct(protected ClientService $clientService)
    {
    }

    public function __invoke($id)
    {
        $clients = $this->clientService->all();
        return view('car.change_client', compact('clients', 'id'));
    }
}
