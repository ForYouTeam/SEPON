<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranModel extends Model
{
    use HasFactory;
    protected $table = "pendaftaran";
    protected $fillable = [
        'id',
        'nama_lengkap',
        'nama_panggilan',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'alamat',
        'tahun_ajaran',
        'path_img',
        'created_at',
        'updated_at',
    ];
}
