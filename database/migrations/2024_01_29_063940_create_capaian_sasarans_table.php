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
        Schema::create('capaian_sasarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_tahun_id');

            $table->string('total_sasaran');
            $table->string('akreditasi_baru');
            $table->string('Reakreditasi');
            $table->timestamps();

            $table->foreign('ref_tahun_id')->references('id')->on('ref_tahuns');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capaian_sasarans');
    }
};
