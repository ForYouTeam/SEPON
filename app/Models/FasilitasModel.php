<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasModel extends Model
{
    use HasFactory;
    protected $table = "fasilitas";
    protected $fillable = [
        'id',
        'nama_ruangan',
        'jumlah_ruangan',
        'deskripsi',
        'id_galeri',
        'created_at',
        'updated_at',
    ];

    public function galeriRole()
    {
        return $this->belongsTo(GaleriModel::class. 'id_galeri');
    }
}
