<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use Dompdf\Dompdf;

class Laporan extends BaseController
{
    public function transaksi()
    {
        $model = new TransaksiModel();
        $data['Transaksi'] = $model->getTransaksi();
        return view('modernize/laporan/transaksi/index', $data);
    }

    public function cetakLaporanTransaksi()
    {
        $dompdf = new dompdf();
        $model = new TransaksiModel();
        $bulan = $this->request->getVar('bulan');
        if (!empty($bulan)) {
            $data['bulan'] = format_bulan($bulan);
        }
        $data['transaksi'] = $model->getTransaksiByBulan($bulan);
        $html = view('modernize/laporan/transaksi/print', $data);
        $dompdf->loadhtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Data Pengiriman.pdf', array(
            "Attachment" => 0
        ));
    }
}
