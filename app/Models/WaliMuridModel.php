<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliMuridModel extends Model
{
    use HasFactory;
    protected $table = "wali_murid";
    protected $fillable = [
        'id_user',
        'nik',
        'nama',
        'jk',
        'tgl_lahir',
        'tempat_lahir',
        'agama',
        'pekerjaan',
        'status_dalam_keluarga',
        'hidup',
        'alamat',
        'penghasilan',
        'path_img',
        'created_at',
        'updated_at',
    ];

    public function userRole()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
