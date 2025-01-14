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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('genre');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('tempat_terbit');
            $table->integer('tahun_terbit');
            $table->string('bahasa');
            $table->integer('jumlah_halaman');
            $table->text('sinopsis');
            $table->integer('stok');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
