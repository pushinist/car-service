<?php

namespace App\Repositories\OrderRepository;

use App\Models\Order;

interface OrderRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function find(int $id);

    public function updateCost(Order $order, int $price);

    public function getOverstayed();

    public function getAlmostOverstayed();

    public function putCompletionTime(Order $order);

    public function getOlds();

    public function getAverageCompletionTime();

}
