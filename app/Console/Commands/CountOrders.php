<?php

namespace App\Console\Commands;

use App\Models\Mechanic;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CountOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mechanics:count-orders';

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
        $mechanics = Mechanic::all();
        $amountOfOrders = [];
        foreach ($mechanics as $mechanic) {
            $amountOfOrders[$mechanic->id] = $mechanic->amount_of_orders;
        }
        Log::info(json_encode($amountOfOrders));
    }
}
