<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $fillable = [
        'id',
        'nama',
        'nip',
        'jk',
        'gol',
        'jabatan',
        'status_nikah',
        'path_img',
        'created_at',
        'updated_at',
    ];
}
