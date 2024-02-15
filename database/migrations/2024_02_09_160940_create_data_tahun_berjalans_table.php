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
        Schema::create('data_tahun_berjalans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_tahun_id');
            $table->string('sasaran');
            $table->string('kadaluarsa');
            $table->string('potensi');

            $table->foreign('ref_tahun_id')->references('id')->on('ref_tahuns');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tahun_berjalans');
    }
};
