<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaliMuridTable extends Migration
{

    public function up()
    {
        Schema::create('wali_murid', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable()->constrained('users');
            $table->string('nik');
            $table->string('nama');
            $table->string('jk');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('status_dalam_keluarga');
            $table->boolean('hidup')->default(true);
            $table->longText('alamat');
            $table->integer('penghasilan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wali_murid');
    }
}
