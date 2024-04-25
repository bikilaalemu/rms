<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     */
    public function boot(): void
=======
     *
     * @return void
     */
    public function boot()
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
