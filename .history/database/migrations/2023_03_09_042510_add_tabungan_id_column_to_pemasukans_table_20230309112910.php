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
        Schema::table('pemasukans', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('tabungan_id')->after('saldo')->required();
            $table->foreign('tabungan_id')->references('id')->on('pemasukans')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemasukans', function (Blueprint $table) {
            //
        });
    }
};
