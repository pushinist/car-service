<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\StoreOrderRequest;
use App\Repositories\OrderPartRepository\OrderPartRepository;
use App\Services\Orders\OrderService;
use App\Services\Parts\PartService;

class OrderEditController extends Controller
{
    public function __construct(
        protected PartService $partService,
        protected OrderService $orderService,
    ) {
    }

    public function __invoke($id)
    {
        $parts = $this->partService->all();
        $order = $this->orderService->find($id);
        return view('order.edit', compact('parts', 'order'));
    }

}
