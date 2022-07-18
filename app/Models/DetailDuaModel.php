<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDuaModel extends Model
{
    use HasFactory;
    protected $table = "detail_2";
    protected $fillable = [
        'id',
        'id_pendaftaran',
        'id_ibu',
        'id_ayah',
        'id_wali',
        'created_at',
        'updated_at',
    ];

    public function pendaftaranRole()
    {
        return $this->belongsTo(PendaftaranModel::class, 'id_pendaftaran');
    }
    public function ibuRole()
    {
        return $this->belongsTo(WaliMuridModel::class, 'id_ibu');
    }
    public function ayahRole()
    {
        return $this->belongsTo(WaliMuridModel::class, 'id_ayah');
    }
    public function waliRole()
    {
        return $this->belongsTo(WaliMuridModel::class, 'id_wali');
    }
}
