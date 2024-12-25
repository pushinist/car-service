<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\StoreOrderRequest;
use App\Http\Requests\Orders\UpdateOrderRequest;
use App\Repositories\OrderPartRepository\OrderPartRepository;
use App\Services\Orders\OrderService;

class OrderUpdateController extends Controller
{
    public function __construct(
        protected OrderService $orderService,
        protected OrderPartRepository $orderPartRepository,
    ) {
    }

    public function __invoke(UpdateOrderRequest $request, $id)
    {
        $validated = $request->validated();
        $this->orderService->update($validated, $id);

        return redirect()->route('orders.index');
    }

}
