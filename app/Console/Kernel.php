<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
<<<<<<< HEAD
     */
    protected function schedule(Schedule $schedule): void
=======
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
<<<<<<< HEAD
     */
    protected function commands(): void
=======
     *
     * @return void
     */
    protected function commands()
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
