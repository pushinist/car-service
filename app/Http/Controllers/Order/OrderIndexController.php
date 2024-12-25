<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarService;
use App\Services\Orders\OrderService;

class OrderIndexController extends Controller
{
    public function __construct(protected OrderService $orderService)
    {
    }

    public function __invoke()
    {
        $orders = $this->orderService->all();
        return view('order.index', compact('orders'));
    }
}
