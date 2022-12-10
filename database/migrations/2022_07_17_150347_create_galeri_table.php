<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriTable extends Migration
{
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->longText('path_file');
            $table->longText('deskripsi');
            $table->string('jenis');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeri');
    }
}
