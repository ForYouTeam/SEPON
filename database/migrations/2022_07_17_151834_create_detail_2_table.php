<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetail2Table extends Migration
{
    public function up()
    {
        Schema::create('detail_2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendaftaran')->constrained('pendaftaran');
            $table->foreignId('id_ibu')->constrained('wali_murid');
            $table->foreignId('id_ayah')->constrained('wali_murid');
            $table->foreignId('id_wali')->nullable()->constrained('wali_murid');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_2');
    }
}
