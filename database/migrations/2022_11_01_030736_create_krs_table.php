<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->char('npm',10);
            $table->char('kode_matakuliah',8);
            $table->timestamps();

            $table->index('npm');
            $table->index('kode_matakuliah');

            $table->foreign('npm')->references('npm')->on('mahasiswa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliah')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
}
