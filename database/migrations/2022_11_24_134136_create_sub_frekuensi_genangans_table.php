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
        Schema::create('sub_frekuensi_genangans', function (Blueprint $table) {
            $table->increments('id_frekuensi_genangan');
            $table->string('kode_kriteria',4)->nullable();
            $table->string('nama_sub_kriteria',100)->nullable();
            $table->string('nilai',3)->nullable();
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
        Schema::dropIfExists('sub_frekuensi_genangans');
    }
};
