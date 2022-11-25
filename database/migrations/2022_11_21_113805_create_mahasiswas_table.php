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
        Schema::create('Mahasiswas', function (Blueprint $table) {
            $table->string('nim', 18)->primary();
            $table->string('nama', 100);
            $table->integer('umur');
            $table->text('alamat', 255);
            $table->string('kota', 50);
            $table->string('kelas', 25);
            $table->string('jurusan', 25);
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
        Schema::dropIfExists('mahasiswas');
    }
};
