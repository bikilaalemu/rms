<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
<<<<<<< HEAD
     */
    public function up(): void
=======
     *
     * @return void
     */
    public function up()
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
<<<<<<< HEAD
            $table->timestamp('expires_at')->nullable();
=======
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
<<<<<<< HEAD
     */
    public function down(): void
=======
     *
     * @return void
     */
    public function down()
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
