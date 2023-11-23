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
        Schema::table('ref_provinsi', function (Blueprint $table) {
            $table->foreignId('id_tahun_akreditasi')
            ->after('id_provinsi')
            ->references('id_tahun_akreditasi')
            ->on('ref_tahun_akreditasis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ref_provinsi', function (Blueprint $table) {
            //
        });
    }
};
