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
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->id();
            //  $table->unsignedBigInteger('pengeluaran_id');
            $table->string('keterangan');

            $table->bigInteger('saldo');
            $table->timestamps();

            // $table->foreign('pengeluaran_id')->references('id')->on('pengeluarans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasukans');
    }
};
