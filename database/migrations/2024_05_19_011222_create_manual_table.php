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
        Schema::create('manual', function (Blueprint $table) {
            $table->id('id_manual');
            $table->foreignid('id_standar');
            $table->foreignid('id_substandar');
            $table->foreignid('id_siklus');
            $table->foreignid('id_unitkerja');
            $table->string('macam_kerja');
            $table->string('aktivitas_pekerjaan');
            $table->string('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manual');
    }
};
