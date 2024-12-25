<?php

namespace App\Repositories\OrderRepository;

use App\Enums\OrderStatus;
use App\Models\Order;
use Carbon\Carbon;

class OrderRepository implements OrderRepositoryInterface
{
    public function all()
    {
        return Order::all();
    }

    public function create(array $data)
    {
        return Order::create($data);
    }

    public function find(int $id)
    {
        return Order::findOrFail($id);
    }

    public function updateCost(Order $order, int $price)
    {
        $order->cost = $price;
        $order->save();
    }

    public function getOverstayed()
    {
        $orders = Order::whereIn(
            'status',
            [
                OrderStatus::New->value,
                OrderStatus::InProgress->value,
                OrderStatus::WaitingForSpareParts->value,
                OrderStatus::Overstayed->value,
            ]
        )->get();
        $overstayedOrders = [];
        foreach ($orders as $order) {
            if (is_null($order->real_completion_time) && $order->planned_completion_time < Carbon::today()) {
                $overstayedOrders[] = $order;
                $order->status = OrderStatus::Overstayed->value;
            }
            $order->save();
        }
        return $overstayedOrders;
    }

    public function getAlmostOverstayed()
    {
        return Order::whereIn(
            'status',
            [
                OrderStatus::New->value,
                OrderStatus::InProgress->value,
                OrderStatus::WaitingForSpareParts->value,
            ]
        )->whereDate('planned_completion_time', Carbon::today()->addDay())->get();
    }

    public function putCompletionTime(Order $order)
    {
        $order->real_completion_time = Carbon::today();
        $order->save();
    }

    public function getOlds()
    {
        return Order::where('creation_time', '<', Carbon::today()->subYear())->get();
    }

    public function getAverageCompletionTime()
    {
        return Order::whereNotNull('real_completion_time')->get()->avg(function ($order) {
            $createdAt = Carbon::parse($order->created_at);
            $completedAt = Carbon::parse($order->real_completion_time);
            return $completedAt->diffInDays($createdAt);
        });
    }
}
