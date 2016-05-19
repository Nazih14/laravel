<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahanBangunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_bangunan', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('kategori');
            $table->string('stok');
            $table->string('harga');
            $table->string('diskon');
            $table->string('gambar');
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
        Schema::drop('bahan');
    }
}
