<?php

namespace App\Repositories\OrderPartRepository;

use App\Models\Order;
use App\Repositories\OrderPartRepository\OrderPartRepositoryInterface;

class OrderPartRepository implements OrderPartRepositoryInterface
{

    public function create(Order $order, array $parts)
    {
        if (!empty($parts)) {
            $order->parts()->attach($parts);
        }
    }

    public function update(Order $order, array $parts)
    {
        $order->parts()->sync($parts ?? []);
    }
}
