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
        Schema::create('tabungan', function (Blueprint $table) {
            $table->id();
            // isi dari tabungan nanti untuk menyimpan sisa saldo masjid dari jumat lalu
            $table->date('tanggal');
            $table->bigInteger('uang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabungan');
    }
};
