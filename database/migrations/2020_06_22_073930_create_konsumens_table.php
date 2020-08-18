<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsumens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('konsumen');
            $table->string('jenis_kendaraan');
            $table->string('no_polisi');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->timestamps();
        });

        DB::table('konsumens')->insert([
            [
                'konsumen' => "Sendi",
                'jenis_kendaraan' => "Mobil",
                'no_polisi' => "B 1209 MOB",
                'tgl_lahir' => "18 Des 1990",
                'jenis_kelamin' => "L",
                'no_hp' => "0888888"
            ],
            [
                'konsumen' => "Bariw",
                'jenis_kendaraan' => "Motor",
                'no_polisi' => "B 1209 MOT",
                'tgl_lahir' => "18 Des 1990",
                'jenis_kelamin' => "L",
                'no_hp' => "0888888"
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsumens');
    }
}
