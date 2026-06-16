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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lokasi');
            $table->text('no_tiket');
            $table->text('no_polisi');
            $table->unsignedBigInteger('id_jenis');
            $table->dateTime('masuk');
            $table->dateTime('keluar');
            $table->integer('perjam_pertama');
            $table->integer('perjam_berikutnya');
            $table->integer('max_perhari');
            $table->integer('total_jam');
            $table->integer('total_bayar');
            $table->timestamps();

            $table->foreign('id_lokasi')->references('id')->on('locations')->onUPDATE('cascade')->onDelete('cascade');
            $table->foreign('id_jenis')->references('id')->on('vehicle_types')->onUPDATE('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
