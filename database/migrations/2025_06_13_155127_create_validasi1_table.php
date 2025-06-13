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
        Schema::create('validasi1', function (Blueprint $table) {
            $table->id('id_validasi1'); // Primary Key

            // Foreign Key fields
            $table->unsignedBigInteger('id_penetapan');
            $table->unsignedBigInteger('id_pelaksanaan');
            $table->unsignedBigInteger('id_evaluasi');
            $table->unsignedBigInteger('id_pengendalian');
            $table->unsignedBigInteger('id_peningkatan');
            $table->unsignedBigInteger('id_user');

            // ENUM and komentar
            $table->enum('status', ['menunggu', 'disetujui', 'ditolak'])->default('menunggu');
            $table->text('komentar')->nullable();

            // Foreign Key Constraints
            $table->foreign('id_penetapan')->references('id_penetapan')->on('penetapan')->onDelete('cascade');
            $table->foreign('id_pelaksanaan')->references('id_pelaksanaan')->on('pelaksanaan')->onDelete('cascade');
            $table->foreign('id_evaluasi')->references('id_evaluasi')->on('evaluasi')->onDelete('cascade');
            $table->foreign('id_pengendalian')->references('id_pengendalian')->on('pengendalian')->onDelete('cascade');
            $table->foreign('id_peningkatan')->references('id_peningkatan')->on('peningkatan')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi1');
    }
};
