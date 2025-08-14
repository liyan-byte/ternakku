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
    Schema::create('ternak', function (Blueprint $table) {
        $table->id();
        $table->string('kode_ternak');
        $table->string('jenis');
        $table->string('ras');
        $table->integer('umur');
        $table->float('berat');
        $table->string('status_reproduksi');
        $table->enum('status_kesehatan', ['Sehat', 'Sakit'])->default('Sehat');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ternak');
    }
};
