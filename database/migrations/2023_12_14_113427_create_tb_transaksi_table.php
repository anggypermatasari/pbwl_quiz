<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('mahsiswa_id')->unsigned();
            $table->integer('id_buku')->unsigned();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->timestamps();
        });
        Schema::table('tb_transaksi', function (Blueprint $table) {
            $table->foreign('mahsiswa_id')->references('mhsw_id')->on('tb_mhsw')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_buku')->references('buku_id')->on('tb_buku')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
