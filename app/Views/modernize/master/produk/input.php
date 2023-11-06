<?= $this->extend('modernize/_partials/template') ?>
<?= $this->section('content') ?>
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Input Produk</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-muted">Master</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="/produk"> Produk</a></li>
                        <li class="breadcrumb-item" aria-current="page">Input Data Produk</li>
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
<?php $errors = session()->getFlashdata('errors');
if (!empty($errors)) { ?>
<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Whoops! Ada kesalahan saat input data, yaitu:</strong>
    <ol class="list-group list-group-numbered">
        <?php foreach ($errors as $error) : ?>
        <li class="list-group-items m-0"><?= esc($error) ?></li>
        <?php endforeach ?>
    </ol>
</div>
<?php } ?>
<div class="card w-100 position-relative overflow-hidden">
    <div class="px-4 py-3 border-bottom d-flex justify-content-between align-items-center bg-primary">
        <h5 class="card-title fw-semibold mb-0 lh-sm text-white">Form Data Produk</h5>
    </div>
    <form action="/produk/store" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-6">
                    <div class="mb-4 row align-items-center">
                        <label for="nama_produk" class="form-label fw-semibold col-sm-3 col-form-label">Nama
                            Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_produk" placeholder="Masukkan Nama Produk"
                                name="nama_produk" value="<?= old('nama_produk') ? old('nama_produk') : '' ?>">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="gambar_produk" class="form-label fw-semibold col-sm-3 col-form-label">Gambar
                            Produk</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" id="gambar_produk" name="gambar_produk"
                                onchange="previewFoto()">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="harga_produk" class="form-label fw-semibold col-sm-3 col-form-label">Harga
                            Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga_produk"
                                placeholder="Masukkan Harga Produk" name="harga_produk"
                                value="<?= old('harga_produk') ? old('harga_produk') : '' ?>">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="deskripsi" class="form-label fw-semibold col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="deskripsi"
                                placeholder="Masukkan Deskripsi Produk" name="deskripsi"
                                value="<?= old('deskripsi') ? old('deskripsi') : '' ?>">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="jumlah_produk" class="form-label fw-semibold col-sm-3 col-form-label">Jumlah
                            Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jumlah_produk"
                                placeholder="Masukkan Jumlah produk" name="jumlah_produk"
                                value="<?= old('jumlah_produk') ? old('jumlah_produk') : '' ?>">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="status" class="form-label fw-semibold col-sm-3 col-form-label">Status Produk</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="status" id="status">
                                <option selected>Pilih Status Produk</option>
                                <option value="Aktif" <?= old('status') === "Aktif" ? "selected" : "" ?>>Aktif</option>
                                <option value="Tidak Aktif" <?= old('status') === "Tidak Aktif" ? "selected" : "" ?>>
                                    Tidak
                                    Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <a href="/produk"
                                class="justify-content-center btn btn-rounded btn-outline-danger d-flex align-items-center font-medium">
                                <i class="ti ti-arrow-left me-2 fs-4"></i>
                                <span>Kembali</span>
                            </a>
                            <button type="submit" class="btn btn-primary font-medium">
                                <i class="ti ti-plus me-2 fs-4"></i>
                                <span>Tambah Data</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url('img/') ?>placeholder.jpg" alt="Gambar Placeholder" id="image-preview"
                        height="300px" class="rounded-3 border border-primary" />
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>