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
    Schema::create('kesehatan', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_ternak')->constrained('ternak')->onDelete('cascade');
        $table->date('tanggal');
        $table->string('jenis_pemeriksaan');
        $table->string('diagnosa');
        $table->string('tindakan');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan');
    }
};
