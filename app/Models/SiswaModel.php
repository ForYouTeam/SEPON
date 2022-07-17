<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = "data_siswa";
    protected $fillable = [
        'id',
        'tahun',
        'lakilaki',
        'perempuan',
        'created_at',
        'updated_at',
    ];
}
