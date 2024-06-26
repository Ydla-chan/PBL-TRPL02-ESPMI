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
        Schema::create('capaian', function (Blueprint $table) {
            $table->id('id_capaian');
            $table->foreignid('id_target');
            $table->string('Triwulan');
            $table->string('penilaian_pengguna');
            $table->string('uraian_pengguna');
            $table->string('dokumen');
            $table->string('penilaian_auditor');
            $table->string('uraian_auditor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capaian');
    }
};
