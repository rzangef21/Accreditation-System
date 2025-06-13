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
        Schema::create('validasi3', function (Blueprint $table) {
            $table->id('id_validasi3'); // Primary Key

            // Foreign Key fields
            $table->unsignedBigInteger('id_validasi2');
            $table->unsignedBigInteger('id_user');

            // ENUM and komentar
            $table->enum('status', ['menunggu', 'disetujui', 'ditolak'])->default('menunggu');
            $table->text('komentar')->nullable();

            // Foreign Key Constraints
            $table->foreign('id_validasi2')->references('id_validasi2')->on('validasi2')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi3');
    }
};
