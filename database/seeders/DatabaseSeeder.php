<?php

namespace Database\Seeders;

<<<<<<< HEAD
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
<<<<<<< HEAD
     */
    public function run(): void
    {
        \App\Models\User::factory(30)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(30)->create();
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    }
}
