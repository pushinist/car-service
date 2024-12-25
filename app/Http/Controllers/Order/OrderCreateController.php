<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarService;
use App\Services\Clients\ClientService;
use App\Services\Mechanics\MechanicService;
use App\Services\Parts\PartService;

class OrderCreateController extends Controller
{
    public function __construct(
        protected CarService $carService,
        protected ClientService $clientService,
        protected MechanicService $mechanicService,
        protected PartService $partService,
    ) {
    }

    public function __invoke()
    {
        [$cars, $clients, $mechanics, $parts] = [
            $this->carService->all(),
            $this->clientService->all(),
            $this->mechanicService->all(),
            $this->partService->all(),
        ];
        return view('order.create', compact('cars', 'clients', 'mechanics', 'parts'));
    }
}
