<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Dashboard extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        $chart['grafik'] = $this->transaksiModel->getGrafikTransaksi();
        // dd($chart);
        return view('modernize/dashboard/index', $chart);
    }
}
