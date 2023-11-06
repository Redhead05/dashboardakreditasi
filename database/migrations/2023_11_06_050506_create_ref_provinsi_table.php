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
        Schema::create('ref_provinsi', function (Blueprint $table) {
            $table->integer('id_provinsi')->primary();
            $table->string('nama', 100);
            $table->string('slug', 200);
            $table->integer('kuota')->default(0);
            $table->text('alamat')->nullable();
            $table->string('ketua', 200)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_provinsi');
    }
};
