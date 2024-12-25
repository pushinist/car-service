<?php

namespace App\Repositories\OrderPartRepository;

use App\Models\Order;

interface OrderPartRepositoryInterface
{
    public function create(Order $order, array $parts);

    public function update(Order $order, array $parts);

}
