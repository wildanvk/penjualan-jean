<!DOCTYPE html>
<html lang="en">

<head>
    <title>Toko Jean Zayn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?= base_url('katalog/') ?>assets/img/apple-icon.png">
    <link rel="shortcut icon" type="<?= base_url('katalog/') ?>image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="<?= base_url('katalog/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('katalog/') ?>assets/css/templatemo.css">
    <link rel="stylesheet" href="<?= base_url('katalog/') ?>assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?= base_url('katalog/') ?>assets/css/fontawesome.min.css">

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="/">
                Zayn
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-end" id="templatemo_main_nav">
                <ul class="nav navbar-nav d-flex justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="/auth">Area Admin</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Banner Hero -->
    <div id="home" class="carousel slide">
        <div class="">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid rounded-3" src="<?= base_url('katalog/') ?>/assets/img/header-img.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Toko Jean Zayn</b></h1>
                            <h3 class="h2">Toko jean terkemuka di Kota Pekalongan</h3>
                            <p>
                                Toko Z merupakan sebuah toko jean yang terletak di Kota Pekalongan. Toko ini menyediakan
                                berbagai macam jenis jean yang berkualitas dan terjamin keasliannya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1" id="katalog">Katalog Produk</h1>
                    <p>
                        Berikut adalah katalog produk dari toko kami.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php foreach ($produk as $key => $row) : ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="<?= base_url('img/') . $row['gambar_produk'] ?>" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-between justify-content-between flex-column">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li class="text-right"><?= format_rupiah($row['harga_produk']) ?> / pcs</li>
                                </ul>
                                <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?= $row['nama_produk'] ?></a>
                                <p class="card-text">
                                    <?= $row['deskripsi'] ?>
                                </p>
                                <a href="https://wa.me/6282322888113?&text=Halo%2C%20saya%20ingin%20membeli%20celana%20jean%20<?= $row['nama_produk'] ?>%20dari%20toko%20Anda" target="_blank" class="btn btn-primary">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Kontak</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>