<?php

namespace App\Repositories;

use App\Interfaces\DetailInterfaceRepository;
use App\Models\DetailSatuModel;

class DetailRepository implements DetailInterfaceRepository
{
    public function create(array $newdetail)
    {
        $data = array(
            'id_pendaftaran' => $newdetail['id_pendaftaran'],
            'id_ayah' => $newdetail['id_ayah'],
            'id_ibu' => $newdetail['id_ibu'],
            'anak_ke' => $newdetail['anak_ke'],
            'jumlah_saudara_kandung' => $newdetail['jumlah_saudara_kandung'],
            'jumlah_saudara_tiri' => $newdetail['jumlah_saudara_tiri'],
            'jumlah_saudara_angkat' => $newdetail['jumlah_saudara_angkat'],
            'hobi' => $newdetail['hobi'],
            'bidang_studi_digemari' => $newdetail['bidang_studi_digemari'],
            'olahraga_digemari' => $newdetail['olahraga_digemari'],
        );
        $detail = DetailSatuModel::create($data);
        return $detail;
    }

    public function getById($iddetail)
    {
    }

    public function update($iddetail, array $newdetail)
    {
        $data = array(
            'anak_ke' => $newdetail['anak_ke'],
            'id_ayah' => $newdetail['id_ayah'],
            'id_ibu' => $newdetail['id_ibu'],
            'jumlah_saudara_kandung' => $newdetail['jumlah_saudara_kandung'],
            'jumlah_saudara_tiri' => $newdetail['jumlah_saudara_tiri'],
            'jumlah_saudara_angkat' => $newdetail['jumlah_saudara_angkat'],
            'hobi' => $newdetail['hobi'],
            'bidang_studi_digemari' => $newdetail['bidang_studi_digemari'],
            'olahraga_digemari' => $newdetail['olahraga_digemari'],
        );
        $detail = DetailSatuModel::where('id_pendaftaran', $iddetail)->update($data);
        return $detail;
    }

    public function delete($iddetail)
    {
        $detail = DetailSatuModel::where('id_pendaftaran', $iddetail)->delete();
        return $detail;
    }
}
