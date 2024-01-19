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
        Schema::create('ref_desas', function (Blueprint $table) {
            $table->id('id_desa');
            $table->unsignedBigInteger('id_kecamatan');
            $table->string('nama');
            $table->string('slug');

            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('ref_kecamatans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_desas');
    }
};
