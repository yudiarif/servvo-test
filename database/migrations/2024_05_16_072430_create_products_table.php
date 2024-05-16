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
        Schema::create('products', function (Blueprint $table) {
             $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('kategori');
            $table->integer('harga');
            $table->integer('jumlah_stok');
            $table->string('foto')->nullable();
            $table->decimal('kapasitas',10,2)->nullable();
            $table->decimal('tinggi',10,2)->nullable();
            $table->decimal('lebar',10,2)->nullable();
            $table->decimal('diameter_tabung',10,2)->nullable();
            $table->decimal('berat_total', 10, 2)->nullable();
            $table->decimal('fire_rating',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
