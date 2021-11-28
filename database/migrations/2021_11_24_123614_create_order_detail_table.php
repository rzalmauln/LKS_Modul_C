<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlahBarang');
            $table->decimal('totalHarga');
            $table->unsignedBigInteger('idOrder');
            $table->unsignedBigInteger('idProduk');
            $table->timestamps();
            
            $table->foreign('idOrder')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idProduk')->references('id')->on('produks')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
