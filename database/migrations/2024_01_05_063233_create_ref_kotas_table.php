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
        Schema::create('ref_kotas', function (Blueprint $table) {
            $table->id('id_kota');
            $table->unsignedBigInteger('id_provinsi');
            $table->string('nama', 100);
            $table->string('slug', 200)->nullable();

            $table->foreign('id_provinsi')->references('id_provinsi')->on('ref_provinsis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_kota');
    }
};
