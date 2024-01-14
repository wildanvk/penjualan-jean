<?= $this->extend('modernize/_partials/template') ?>
<?= $this->section('content') ?>
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Laporan Transaksi</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-muted">Laporan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Transaksi</li>
                    </ol>
                </nav>
            </div>
            <div class="col-2">
                <div class="text-center mb-n5">
                    <img src="<?php echo base_url('modernize-bootstrap'); ?>/dist/images/breadcrumb/ChatBc.png" alt=""
                        class="img-fluid mb-n4">
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (session()->getFlashdata('info')) { ?>
<div class="alert alert-info alert-dismissible border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><?= session()->getFlashdata('info') ?></strong>
</div>
<?php } ?>
<?php if (session()->getFlashdata('input')) { ?>
<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><?= session()->getFlashdata('input') ?></strong>
</div>
<?php } ?>
<?php if (session()->getFlashdata('update')) { ?>
<div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><?= session()->getFlashdata('update') ?></strong>
</div>
<?php } ?>
<?php if (session()->getFlashdata('delete')) { ?>
<div class="alert alert-warning alert-dismissible border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong><?= session()->getFlashdata('delete') ?></strong>
</div>
<?php } ?>
<div class="row">
    <div class="col-12">
        <div class="card col-4">
            <div class="px-4 py-3 border-bottom d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <h5 class="card-title fw-semibold mb-0 lh-sm me-2">Laporan Transaksi</h5>
                </div>
            </div>
            <div class="mx-4 my-3">
                <form action="/laporan/cetaklaporantransaksi" method="post" target="_blank">
                    <div class="mb-3 row">
                        <div class="col-md-10">
                            <div>
                                <label class="control-label mb-1">Pilih Bulan</label>
                                <select name="bulan" id="bulan" class="form-select">
                                    <option value="">-- Pilih Bulan --</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="12">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="button my-auto">
                            <button type="submit" class="btn btn-info btn-block me-1">
                                <i class="ti ti-printer fs-4"></i>
                                Cetak Laporan
                            </button>
                            <button type="button" class="btn btn-primary btn-block ms-1" onclick="resetData()">
                                <i class="ti ti-reload fs-4"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="py-3" style="overflow-x: auto !important;">
                <table id="laporanPengirimanTable" class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Tanggal Transaksi</th>
                            <th class="text-center">ID Transaksi</th>
                            <th>Nama Transaksi</th>
                            <th>Alamat</th>
                            <th class="text-center">No Hp</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Jumlah Barang</th>
                            <th class="text-center">Total Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Transaksi as $key => $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $key + 1; ?></td>
                            <td class="text-center"><?php echo $row['tgl_transaksi']; ?></td>
                            <td class="text-center"><?php echo $row['id_transaksi']; ?></td>
                            <td><?php echo $row['nama_customer']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td class="text-center"><?php echo $row['no_hp']; ?></td>
                            <td class="text-center"><?php echo $row['nama_barang']; ?></td>
                            <td class="text-center"><?php echo $row['jumlah_barang']; ?></td>
                            <td class="text-center"><?php echo format_rupiah($row['total_bayar']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/myjs/LaporanPengirimanTable.js"></script>
<?= $this->endSection() ?>