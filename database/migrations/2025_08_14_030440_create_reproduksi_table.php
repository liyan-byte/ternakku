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
    Schema::create('reproduksi', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_ternak')->constrained('ternak')->onDelete('cascade');
        $table->date('tanggal_kawin')->nullable();
        $table->date('tanggal_kelahiran')->nullable();
        $table->integer('jumlah_anak')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reproduksi');
    }
};
