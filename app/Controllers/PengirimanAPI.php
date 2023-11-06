<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\Header;
use App\Models\PengirimanModel;

Header('Access-Control-Allow-Origin:*');
Header('X-Requested-With: XMLHttpRequest');
Header('Access-Control-Allow-Methods:GET,PUT,POST,DELETE,OPTIONS');
Header('Content-Type:application\json');
Header('Access-control-allow-headers:Content-Type,Access-Control-Allow-Headers,Authorization,x-Requested-with');

class PengirimanAPI extends ResourceController
{
    use ResponseTrait;
    public function getAllData()
    {
        $model = new PengirimanModel();
        $data['pengiriman'] = $model->getPengiriman();
        foreach ($data['pengiriman'] as &$id) {
            $id['tgl_pengiriman'] = format_tanggal($id['tgl_pengirimana']);
        }
        foreach ($data['pengiriman'] as &$id) {
            $id['resi'] = format_text($id['resi']);
        }
        return $this->respond($data);
    }
    // function __construct()
    // {
    //     $this->model = new PengirimanModel();
    // }
    // public function index()
    // {
    // }

    // public function create()
    // {
    //     $data = [
    //         'tgl_pengiriman'     => $this->request->getVar('tgl_pengiriman'),
    //         'id_pengiriman'     => $this->request->getVar('id_pengiriman'),
    //         'id_transaksi'     => $this->request->getVar('id_transaksi'),
    //         'resi'   => $this->request->getVar('resi'),
    //     ];
    //     $this->model->save($data);
    //     $response = [
    //         'status' => 201,
    //         'error' => null,
    //         'messages' => [
    //             'success' => 'Berhasil Memasukan Data Pengiriman'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }

}
