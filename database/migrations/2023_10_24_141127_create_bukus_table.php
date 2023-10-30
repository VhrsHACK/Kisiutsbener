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
        Schema::create('bukus', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('judul_buku');
            $table->date('tahun_penerbit');
            $table->uuid('penulis_id');
            $table->uuid('penerbit_id');
            $table->string('harga');

            $table->foreign('penulis_id')->references('id')->on('penulis')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('penerbit_id')->references('id')->on('penerbits')->restrictOnDelete()->restrictOnUpdate();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
