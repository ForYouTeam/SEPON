<?php

namespace App\Interfaces;

interface DetailInterfaceRepository
{
    public function create(array $newdetail);
    public function getById($iddetail);
    public function update($iddetail, array $newdetail);
    public function delete($iddetail);
}
