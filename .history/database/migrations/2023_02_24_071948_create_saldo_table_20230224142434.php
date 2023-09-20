<?php

use Brick\Math\BigInteger;
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
        Schema::create('saldo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemasukan_id');
            $table->foreign('pemasukan_id')->references('id')->on('pemasukans')->onDelete('cascade');
            $table->unsignedBigInteger('pengeluaran_id');
            $table->foreign('pengeluaran_id')->references('id')->on('pengeluarans')->onDelete('cascade');
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
        Schema::dropIfExists('saldo');
    }
};
