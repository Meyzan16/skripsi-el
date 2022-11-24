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
        Schema::create('tb_proses_kalkulasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_altenatif')->nullable();
            $table->foreignId('id_tinggi_genangan')->nullable();
            $table->foreignId('id_luas_genangan')->nullable();
            $table->foreignId('id_lamanya_genangan')->nullable();
            $table->foreignId('id_frekuensi_genangan')->nullable();
            $table->foreignId('id_kerugian_ekonomi')->nullable();
            $table->foreignId('id_gangguan_sosial')->nullable();
            $table->foreignId('id_gangguan_tranportasi')->nullable();
            $table->foreignId('id_kerugian_daerah_perumahan')->nullable();
            $table->foreignId('id_hak_milik_pribadi')->nullable();
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
        Schema::dropIfExists('tb_proses_kalkulasis');
    }
};
