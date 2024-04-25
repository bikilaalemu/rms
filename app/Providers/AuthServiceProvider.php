<?php

namespace App\Providers;

<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc

class AuthServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The model to policy mappings for the application.
=======
     * The policy mappings for the application.
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
<<<<<<< HEAD
     */
    public function boot(): void
    {
        $this->registerPolicies();
=======
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
        //
    }
}
