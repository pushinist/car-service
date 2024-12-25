<?php

namespace App\Console\Commands;

use App\Services\Orders\OrderService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ClientsNotify extends Command
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
    protected $signature = 'clients:notify';

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
        $orders = $this->orderService->getAlmostOverstayed();
        foreach ($orders as $order) {
            Log::info("Order #{$order->id} is coming to be overstayed in one day!");
        }
    }
}
