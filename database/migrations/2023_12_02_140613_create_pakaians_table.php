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
        Schema::create('pakaian', function (Blueprint $table) {
            $table->id(); 
            $table->string('kategori_pakaian');    
            $table->string('nama');            
            $table->decimal('harga', 10, 2); // Kolom harga dengan tipe decimal (10 digit, 2 digit di belakang koma)
            $table->integer('stock'); // Kolom stock dengan tipe integer
            $table->string('gambar')->nullable(); // Kolom gambar dengan tipe string dan boleh kosong (nullable)
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaian');
    }
};
