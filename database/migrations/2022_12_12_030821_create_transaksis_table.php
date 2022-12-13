<?php

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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('idt');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_orders');
            $table->date('tanggal');
            $table->string('total_bayar');
            $table->enum('jenis_pembayaran', ['debit', 'cod']);

            $table->foreign('id')->references('id')->on('produks')->onDelete('cascade');
            $table->foreign('id_orders')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
