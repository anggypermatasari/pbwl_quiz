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
        Schema::create('tb_mhsw', function (Blueprint $table) {
            $table->increments('mhsw_id');
            $table->string('mhsw_nim');
            $table->string('mhsw_nama');
            $table->text('mhsw_alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_mhsw');
    }
};
