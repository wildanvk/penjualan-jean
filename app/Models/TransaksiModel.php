<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';

    public function getTransaksi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_transaksi' => $id]);
        }
    }

    public function getTransaksiByBulan($bulan)
    {
        if ($bulan == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['MONTH(tgl_transaksi)' => $bulan]);
        }
    }

    public function getGrafikTransaksi()
    {
        return $this->select('MONTHNAME(tgl_transaksi) as bulan, COUNT(id_transaksi) as jumlah')
            ->where('YEAR(tgl_transaksi)', 2023)
            ->groupBy('MONTH(tgl_transaksi)')
            ->orderBy('MONTH(tgl_transaksi)', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function getLastTransaksi()
    {
        return $this->orderBy('id_transaksi', 'DESC')
            ->first();
    }

    public function getActiveTransaksi()
    {
        return $this->where('status', 'Active')
            ->findAll();
    }

    public function insertTransaksi($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateTransaksi($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_transaksi' => $id]);
    }

    public function deleteTransaksi($id)
    {
        return $this->db->table($this->table)->delete(['id_transaksi' => $id]);
    }
}
