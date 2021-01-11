<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_order', function (Blueprint $table) {
            $table->id();
            $table->text("cart");
            $table->string('name');
            $table->string('email');
            $table->string('city');
            $table->string('state');
            $table->string('address');
            $table->string('phone');
            $table->string('zip');
            $table->string("status");
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
        Schema::dropIfExists('guest_order');
    }
}
