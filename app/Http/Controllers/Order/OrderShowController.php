<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarService;
use App\Services\Clients\ClientService;
use App\Services\Mechanics\MechanicService;
use App\Services\Orders\OrderService;
use Carbon\Carbon;

class OrderShowController extends Controller
{
    public function __construct(
        protected OrderService $orderService
    ) {
    }

    public function __invoke($id)
    {
        $order = $this->orderService->find($id);
        $currentDate = Carbon::now();
        return view('order.show', compact('order', 'currentDate'));
    }
}
