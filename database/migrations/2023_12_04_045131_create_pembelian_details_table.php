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
        Schema::create('pembelian_detail', function (Blueprint $table) {
            $table->id();
            $table->string('pembelian_id');
            $table->string('pakaian_id');
            $table->integer('jumlah_pembelian');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_detail');
    }
};
