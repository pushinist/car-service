<?php

namespace App\Console;

use Illuminate\Support\Facades\Schedule;

class Kernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('orders:check-overstayed')->dailyAt('09:00');

        $schedule->command('orders:archive')->monthlyOn(1, '00:00');
        $schedule->command('cache:clear-cache')->monthlyOn(1, '00:00');

        $schedule->command('clients:notify-overstayed')->dailyAt('09:00');
        $schedule->command('clients:notify-maintenance')->cron('0 0 1 1,7 *');

        $schedule->command('mechanics:count-orders')->everyTwoHours();

        $schedule->command('orders:average-completion-time')->dailyAt('00:00');
    }
}
