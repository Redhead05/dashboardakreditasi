<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_akreditasis', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('npsn', 22)->nullable();
            $table->string('nama_lembaga', 170)->nullable();
            $table->integer('id_satuan')->nullable();
            $table->string('satuan', 6)->nullable();
            $table->string('program', 44)->nullable();
            $table->string('alamat', 1319)->nullable();
            $table->unsignedBigInteger('id_desa');
            $table->string('kel_desa', 32)->nullable();
            $table->unsignedBigInteger('id_kecamatan');
            $table->string('kecamatan', 100)->nullable();
            $table->bigInteger('id_kota')->unsigned();
            $table->string('kabkota', 100)->nullable();
            $table->bigInteger('id_provinsi')->unsigned();
            $table->string('provinsi', 100)->nullable();
            $table->integer('tahun_akreditasi')->nullable();
            $table->string('tanggal_sk', 16)->nullable();
            $table->string('no_sk', 50)->nullable();
            $table->integer('total_nilai')->nullable();
            $table->string('status', 13)->nullable();
            $table->string('no_sertifikat', 50)->nullable();
            $table->string('path_sertifikat')->nullable();
            $table->integer('download_count')->nullable()->default(0);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('keterangan')->nullable();

//            $table->index(['status', 'npsn', 'nama_lembaga', 'satuan', 'program', 'id_kel_desa', 'id_kecamatan', 'id_kabkota', 'id_provinsi', 'tahun_akreditasi'], 'id');
            $table->foreign('id_provinsi')->references('id_provinsi')->on('ref_provinsis');
            $table->foreign('id_kota')->references('id_kota')->on('ref_kotas');
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('ref_kecamatans');
            $table->foreign('id_desa')->references('id_desa')->on('ref_desas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_akreditasi');
    }
};
