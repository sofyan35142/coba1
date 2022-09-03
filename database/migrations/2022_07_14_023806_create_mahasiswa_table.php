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
        Schema::create('handphone', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_barang');
            $table->string('fitur');
            $table->string('harga_jual');
            $table->string('jumlah');
            $table->string('foto');
            // $table->softDeletes();
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
        Schema::dropIfExists('mahasiswa');
    }
};
