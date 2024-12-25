<?php

namespace App\Services\Orders;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Repositories\MechanicRepository\MechanicRepository;
use App\Repositories\OrderPartRepository\OrderPartRepository;
use App\Repositories\OrderRepository\OrderRepository;
use App\Repositories\PartRepository\PartRepository;

class OrderService
{
    public function __construct(
        protected OrderRepository $orderRepository,
        protected OrderPartRepository $orderPartRepository,
        protected PartRepository $partRepository,
        protected MechanicRepository $mechanicRepository,
    ) {
    }

    public function all()
    {
        return $this->orderRepository->all();
    }

    public function create(array $data)
    {
        if (array_key_exists('parts', $data)) {
            $parts = array_pop($data);
            $order = $this->createOrder($data, $parts);
            $this->updateCost($order, $parts);
        } else {
            $order = $this->createOrder($data);
            $this->updateCost($order, []);
        }
    }

    public function find(int $id)
    {
        return $this->orderRepository->find($id);
    }


    public function update(array $data, int $id)
    {
        if (array_key_exists('parts', $data)) {
            $parts = array_pop($data);
            $order = $this->orderRepository->find($id);
            $order->update($data);
            $this->orderPartRepository->update($order, $parts);
            $this->updateCost($order, $parts);
        } else {
            $order = $this->orderRepository->find($id);
            $order->update($data);
            $this->orderPartRepository->update($order, []);
            $this->updateCost($order, []);
        }
        if (in_array($data['status'], [OrderStatus::Completed->value, OrderStatus::Canceled->value])) {
            $this->closeOrder($order);
        }
    }

    public function getOverstayed()
    {
        return $this->orderRepository->getOverstayed();
    }

    public function getAlmostOverstayed()
    {
        return $this->orderRepository->getAlmostOverstayed();
    }

    public function archive()
    {
        $oldOrders = $this->orderRepository->getOlds();
        foreach ($oldOrders as $order) {
            $order->delete();
        }
    }

    public function getAverageCompletionTime()
    {
        return $this->orderRepository->getAverageCompletionTime();
    }

    private function updateCost(Order $order, array $parts)
    {
        $cost = 0;

        foreach ($parts as $part) {
            $cost = $cost + $this->partRepository->find($part)->price;
        }
        $this->orderRepository->updateCost($order, $cost);
    }

    private function createOrder(array $data, array $parts = [])
    {
        $this->mechanicRepository->addOrder($data['mechanic_id']);
        $order = $this->orderRepository->create($data);
        $this->orderPartRepository->create($order, $parts);
        return $order;
    }

    private function closeOrder(Order $order)
    {
        $this->mechanicRepository->removeOrder($order['mechanic_id']);
        $this->orderRepository->putCompletionTime($order);
    }


}
