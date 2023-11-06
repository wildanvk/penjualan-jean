<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';

    public function getProduk($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_produk' => $id])
                ->getRowArray();
        }
    }

    public function getActiveProduk()
    {
        return $this->where('status', 'Aktif')
            ->findAll();
    }

    public function insertProduk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateProduk($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_produk' => $id]);
    }

    public function deleteProduk($id)
    {
        return $this->db->table($this->table)->delete(['id_produk' => $id]);
    }
}
