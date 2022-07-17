<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileSekolahTable extends Migration
{
    public function up()
    {
        Schema::create('profile_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->longText('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('telepon');
            $table->string('nama_yayasan');
            $table->string('status_sekolah');
            $table->foreignId('nama_kepala_sekolah')->constrained('guru');
            $table->longText('visi');
            $table->longText('misi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_sekolah');
    }
}
