<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idKategori');
            $table->string('namaProduk');
            $table->integer('beratProduk');
            $table->string('warnaProduk');
            $table->date('tanggalProduksi');
            $table->decimal('hargaProduk');
            $table->timestamps();

            $table->foreign('idKategori')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
