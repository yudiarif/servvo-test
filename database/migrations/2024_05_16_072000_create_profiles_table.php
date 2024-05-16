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
        Schema::create('profiles', function (Blueprint $table) {
           $table->id();
            $table->string('nama_customer');
            $table->string('nomor_telepon');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('nomor_npwp');
            $table->string('username');
            $table->string('password');
            $table->decimal('total_diskon', 10, 2)->default(0);
            $table->decimal('credit_limit_transaksi', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
