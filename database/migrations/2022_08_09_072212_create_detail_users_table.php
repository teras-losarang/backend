<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('nik', 20)->nullable();
            $table->string('village', 50)->nullable();
            $table->string('districts', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code', 6)->nullable();
            $table->string('phone', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_users');
    }
};
