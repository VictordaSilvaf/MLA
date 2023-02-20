<?php

namespace App\Console;

use App\Jobs\MlaTesting;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
//        $schedule->command('inspire')->everyMinute()->runInBackground();
//        $schedule->job(new MlaTesting())->everyMinute()->withoutOverlapping('5000');
//        $schedule->exec('python3 resources/script.py')
//            ->onSuccess(function () {
//                logger('python3 resources/script.py success');
//            })
//            ->onFailure(function () {
//                logger('python3 resources/script.py failure');
//            })
//            ->before(function () {
//                logger('python3 resources/script.py before');
//            })
//            ->after(function () {
//                logger('python3 resources/script.py after');
//            })
//            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
