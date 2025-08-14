<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('riwayat_ternak', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_ternak');
        $table->string('tanggal');
        $table->string('kejadian'); // contoh: "Sakit", "Diberi vaksin", "Melahirkan"
        $table->text('keterangan')->nullable();
        $table->timestamps();

        $table->foreign('id_ternak')->references('id')->on('ternak')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('riwayat_ternak');
}

};
