<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSatuModel extends Model
{
    use HasFactory;
    protected $table = 'detail_1';
    protected $fillable = [
        'id',
        'id_pendaftaran',
        'id_ayah',
        'id_ibu',
        'id_wali',
        'anak_ke',
        'jumlah_saudara_kandung',
        'jumlah_saudara_tiri',
        'jumlah_saudara_angkat',
        'hobi',
        'bidang_studi_digemari',
        'olahraga_digemari',
        'created_at',
        'updated_at',
    ];
    public function pendaftar()
    {
        return $this->belongsTo(PendaftaranModel::class, 'id_pendaftaran');
    }

    public function ayah()
    {
        return $this->belongsTo(WaliMuridModel::class, 'id_ayah');
    }

    public function ibu()
    {
        return $this->belongsTo(WaliMuridModel::class, 'id_ibu');
    }

    public function wali()
    {
        return $this->belongsTo(WaliMuridModel::class, 'id_wali');
    }
}
