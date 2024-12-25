<?php

namespace App\Http\Controllers;

use App\Console\Commands\CheckOverstayedOrders;
use App\Services\Orders\OrderService;

class TestController
{
    public function __construct(protected OrderService $orderService)
    {
    }

    public function __invoke()
    {
        return $this->orderService->getOverstayed();
    }
}
