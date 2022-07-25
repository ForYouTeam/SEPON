<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetail1Table extends Migration
{
    public function up()
    {
        Schema::create('detail_1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendaftaran')->constrained('pendaftaran');
            $table->foreignId('id_ayah')->constrained('wali_murid');
            $table->foreignId('id_ibu')->constrained('wali_murid');
            $table->string('anak_ke');
            $table->string('jumlah_saudara_kandung');
            $table->string('jumlah_saudara_tiri');
            $table->string('jumlah_saudara_angkat');
            $table->string('hobi');
            $table->string('bidang_studi_digemari');
            $table->string('olahraga_digemari');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_1');
    }
}
