<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('konsumen_id')->unsigned();
            $table->foreign('konsumen_id')->references('id')->on('konsumens')->onDelete('cascade');
            $table->string('no_polisi');
            $table->string('waktu_masuk');
            $table->string('waktu_keluar');
            $table->string('biaya');
            $table->timestamps();
        });

        DB::table('transaksis')->insert([
            'konsumen_id' => 1,
            'no_polisi' => "B 1209 UHY  ",
            'waktu_masuk' => "08:15",
            'waktu_keluar' => "09:15",
            'biaya' => "1500"
        ]);
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
}
