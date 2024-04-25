<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
  /**
   * Register services.
<<<<<<< HEAD
   */
  public function register(): void
=======
   *
   * @return void
   */
  public function register()
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
  {
    //
  }

  /**
   * Bootstrap services.
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
    $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
    $verticalMenuData = json_decode($verticalMenuJson);

    // Share all menuData to all the views
    \View::share('menuData', [$verticalMenuData]);
  }
}
