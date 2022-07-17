<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSatuModel extends Model
{
    use HasFactory;
    protected $table = '';
    protected $fillable = [
        'id',
        'id_pendaftaran',
        'anak_ke',
        'jumlah_saudara_kandung',
        'jumlah_saudara_tiri',
        'jumlah_saudara_angkat',
        'alamat',
        'hobi',
        'bidang_studi_digemari',
        'olahraga_digemari',
        'created_at',
        'updated_at',
    ];

    public function pendaftaranRole()
    {
        return $this->belongsTo(PendaftaranModel::class, 'id_pendaftaran');
    }
}
