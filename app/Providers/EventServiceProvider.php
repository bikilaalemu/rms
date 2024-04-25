<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The event to listener mappings for the application.
=======
     * The event listener mappings for the application.
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
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
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
<<<<<<< HEAD
     */
    public function shouldDiscoverEvents(): bool
=======
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    {
        return false;
    }
}
