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
        Schema::create('targetmutu', function (Blueprint $table) {
            $table->id('id_target');
            $table->foreignid('id_standar');
            $table->foreignid('id_substandar');
            $table->string('judul');
            $table->string('butir');
            $table->string('standar_mutu');
            $table->string('target_capaian');
            $table->string('indikator');	
            $table->text('cara_mengukur');
            $table->string('target_waktu');
            $table->foreignid('id_unitkerja');;
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('targetmutu');
    }
};
    