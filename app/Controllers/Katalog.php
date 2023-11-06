<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Katalog extends BaseController
{
    public function index()
    {
        $model = new ProdukModel();
        $data['produk'] = $model->getActiveProduk();
        return view('katalog/index', $data);
    }
}
