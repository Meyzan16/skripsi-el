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
        Schema::create('tb_data_kriterias', function (Blueprint $table) {
            $table->string('kode_kriteria',4)->primary();
            $table->string('nama_kriteria',100)->nullable();
            $table->string('bobot_kriteria',2)->nullable();
            $table->enum('jenis_kriteria', ['Benefit','Cost'])->nullable();
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
        Schema::dropIfExists('tb_data_kriterias');
    }
};
