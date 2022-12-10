<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    use HasFactory;
    protected $table = "galeri";
    protected $fillable = [
        'id',
        'path_file',
        'deskripsi',
        'jenis',
        'created_at',
        'updated_at',
    ];
}
