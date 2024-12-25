<?php

namespace App\Console\Commands;

use App\Services\Orders\OrderService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class AverageCompletionTime extends Command
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
    protected $signature = 'orders:average-completion-time';

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
        Log::info($this->orderService->getAverageCompletionTime());
    }
}
