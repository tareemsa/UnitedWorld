<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('city');
            $table->string('town');
            $table->string('location');
            $table->string('status');
            $table->string('phone');
            $table->string('uwestate_url');
            $table->decimal('starting_price_usd', 10, 2);
            $table->string('rooms');
            $table->boolean('sea_view')->default(false);
            $table->timestamps();
            $table->softDeletes(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
      
    }
}
