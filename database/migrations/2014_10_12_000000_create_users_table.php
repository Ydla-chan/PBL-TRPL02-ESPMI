<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignid('id_unitkerja');
            $table->string('NIK');
            $table->string('nama')->nullable();
            $table->string('email')->unique()->nullable();
            $table->enum('jk', ['L', 'P'])->nullable();
            $table->string('role')->nullable();
            $table->string('notelp')->nullable();
            $table->string('urlProfile')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('urlProfile');
        });
    }
}
