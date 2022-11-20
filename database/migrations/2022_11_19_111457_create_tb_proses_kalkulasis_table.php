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
            $table->foreignId('id_alternatif')->nullable();
            $table->foreignId('id_pekerjaan')->nullable();
            $table->foreignId('id_penghasilan')->nullable();
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
