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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_beli');
            $table->unsignedBigInteger('costumer_id');
            $table->unsignedBigInteger('obat_id');
            $table->integer('jumlah_beli');
            $table->integer('total_harga');
            $table->timestamps();

            $table->foreign('costumer_id')->references('id')->on('costumers');
            $table->foreign('obat_id')->references('id')->on('obats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
