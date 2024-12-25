<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\StoreOrderRequest;
use App\Repositories\OrderPartRepository\OrderPartRepository;
use App\Services\Orders\OrderService;

class OrderStoreController extends Controller
{
    public function __construct(
        protected OrderService $orderService,
        protected OrderPartRepository $orderPartRepository,
    ) {
    }

    public function __invoke(StoreOrderRequest $request)
    {
        $validated = $request->validated();
        $this->orderService->create($validated);

        return redirect()->route('orders.index');
    }

}
