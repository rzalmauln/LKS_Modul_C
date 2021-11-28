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
            $table->date('orderDate');
            $table->unsignedBigInteger('idUsers');
            $table->unsignedBigInteger('idKirim');
            $table->timestamps();

            $table->foreign('idUsers')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idKirim')->references('id')->on('kirims')->onDelete('cascade')->onUpdate('cascade');
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
