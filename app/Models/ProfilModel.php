<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilModel extends Model
{
    use HasFactory;
    protected $table = "profile_sekolah";
    protected $fillable = [
        'id',
        'nama_sekolah',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'telepon',
        'nama_yayasan',
        'status_sekolah',
        'nama_kepala_sekolah',
        'visi',
        'misi',
        'created_at',
        'updated_at',
    ];

    public function guruRole()
    {
       return $this->belongsTo(GuruModel::class, 'nama_kepala_sekolah');
    }
}
