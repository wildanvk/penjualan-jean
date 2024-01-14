<!DOCTYPE html>
<html>

<head>
    <title>Laporan Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
            border-bottom: 2px solid #000;
        }

        .date-range {
            text-align: center;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: center;
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Toko Jean Zayn</h1>
    </div>
    <div class="date-range">
        <h3>Laporan Transaksi</h3>
        <p>Periode: <?= isset($bulan) ? $bulan : 'Semua' ?></p>
    </div>
    <table>
        <thead class="">
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
            <?php if (empty($Transaksi)) { ?>
                <tr>
                    <td class="text-center" colspan="9">Tidak ada data</td>
                </tr>
            <?php } else { ?>
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
            <?php } ?>
        </tbody>
    </table>
</body>

</html>