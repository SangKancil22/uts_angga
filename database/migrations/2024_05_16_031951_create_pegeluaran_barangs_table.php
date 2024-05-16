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
        Schema::create('pegeluaran_barangs', function (Blueprint $table) {
            $table->id();
            $table->integer("id_pengeluaran");
            $table->date("tgl_keluar");
            $table->string("tujuan", 150);
            $table->integer("quantity");
            $table->integer("kode_barang");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegeluaran_barangs');
    }
};
