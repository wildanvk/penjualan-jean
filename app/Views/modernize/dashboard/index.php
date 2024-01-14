<?= $this->extend('modernize/_partials/template') ?>
<?= $this->section('content') ?>
<!--  Owl carousel -->
<div div class="owl-carousel counter-carousel owl-theme">
    <div class="item">
        <div class="card border-0 zoom-in bg-light-primary shadow-none">
            <div class="card-body">
                <div class="text-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-primary mb-1">Produk</p>
                    <h5 class="fw-semibold text-primary mb-0">96</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card border-0 zoom-in bg-light-warning shadow-none">
            <div class="card-body">
                <div class="text-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-warning mb-1">Transaksi</p>
                    <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card border-0 zoom-in bg-light-info shadow-none">
            <div class="card-body">
                <div class="text-center">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-info mb-1">Pengiriman</p>
                    <h5 class="fw-semibold text-info mb-0">356</h5>
                </div>
            </div>
        </div>
    </div>

</div>
<!--  Row 3 -->
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div>
                    <h5 class="card-title fw-semibold mb-1">Jumlah Transaksi</h5>
                    <p class="card-subtitle mb-0">Per bulan</p>
                    <?php if (count($grafik) > 0) { ?>
                        <div id="jumlahTransaksi" class="mb-7 pb-8"></div>
                    <?php } else { ?>
                        <div id="transaksiKosong" class="mb-7 pb-8">
                            <div class="d-flex justify-content-center">
                                <div class="p-5">
                                    <h3>Tidak ada transaksi tahun ini.</h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($grafik)) {
    if (count($grafik) > 0) {
        foreach ($grafik as $data) {
            $total[] = $data['jumlah'];
            $month[] = [$data['bulan']];
        }
    }
}
?>


<?php
if (isset($grafik)) {
    if (count($grafik) > 0) {
        $bulan = json_encode($month);
        $jumlah = json_encode($total);
?>
        <?= $this->section('javascript') ?>
        <script>
            var salary = {
                series: [{
                    name: "Jumlah Transaksi",
                    data: <?php echo $jumlah ?>,
                }, ],

                chart: {
                    toolbar: {
                        show: false,
                    },
                    height: 260,
                    type: "bar",
                    fontFamily: "Plus Jakarta Sans', sans-serif",
                    foreColor: "#adb0bb",
                },
                colors: [
                    "var(--bs-primary)",
                ],
                plotOptions: {
                    bar: {
                        borderRadius: 5,
                        columnWidth: "10%",
                        distributed: true,
                        endingShape: "rounded",
                    },
                },

                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                grid: {
                    yaxis: {
                        lines: {
                            show: false,
                        },
                    },
                    xaxis: {
                        lines: {
                            show: false,
                        },
                    },
                },
                xaxis: {
                    categories: <?php echo $bulan ?>,
                    axisBorder: {
                        show: true,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    labels: {
                        show: true,
                    },
                },
                tooltip: {
                    theme: "dark",
                },
            };

            var chart = new ApexCharts(
                document.querySelector("#jumlahTransaksi"),
                salary
            );
            chart.render();
        </script>
        <?= $this->endSection() ?>
    <?php } ?>
<?php } ?>
<?= $this->endSection() ?>