<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Repositories\OrderRepository\OrderRepository;
use App\Services\Orders\OrderService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CheckOverstayedOrders extends Command
{
    public function __construct(protected OrderService $orderService)
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:check-overstayed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $overstayedOrders = $this->orderService->getOverstayed();
        foreach ($overstayedOrders as $order) {
            Log::info("Order #{$order->id} overstayed");
        }
        return $overstayedOrders;
    }
}
