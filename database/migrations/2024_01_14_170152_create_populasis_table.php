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
        Schema::create('populasis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('total_populasi');
            $table->string('akreditasi');
            $table->string('belum_akreditasi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('populasis');
    }
};
