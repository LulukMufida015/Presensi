<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matakuliah', function (Blueprint $table) {
            $table->dropColumn('Dosen_id'); //menghapus kolom kelas
            $table->unsignedBigInteger('id_dosen')->nullable(); //menambahkan kolom kelas_id
            $table->foreign('id_dosen')->references('id')->on('dosen'); //menambahkan foreign key di kolom kelas_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matakuliah', function (Blueprint $table) {
            $table->string('dosen');
            $table->dropForeign('[id_dosen]');
        });
    }
}
