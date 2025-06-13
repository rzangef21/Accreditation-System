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
        Schema::create('evaluasi', function (Blueprint $table) {
            $table->id('id_evaluasi');
            $table->string('id_kriteria', 4);
            $table->string('id_tahap', 4);
            $table->string('nama_dokumen', 100)->nullable();
            $table->text('isi')->nullable();
            $table->string('link', 100)->nullable();
            $table->string('file', 100)->nullable();

            $table->foreign('id_kriteria')->references('id_kriteria')->on('kriteria')->onDelete('cascade');
            $table->foreign('id_tahap')->references('id_tahap')->on('tahap')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi');
    }
};
