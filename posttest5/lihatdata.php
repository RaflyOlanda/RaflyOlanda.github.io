<?php
require('koneksi.php'); 

$query = "SELECT * FROM rkt"; 
$result = mysqli_query($conn, $query);

$raket = [];
while ($row = mysqli_fetch_assoc($result)) {
    $raket[] = $row; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi Raket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lihatdata.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <!-- NAVBAR -->
    <?php include('navbar.php') ?>

    <main class="data-raket-section">
        <h1 class="data-raket-title">Daftar Transaksi Raket Bulutangkis</h1>

        <div class="container-buttons">
            <a href="tambahdata.php">
                <button class="btn tambah">Tambah Transaksi</button>
            </a>
            <a href="index.php">
                <button class="btn back">Kembali</button>
            </a>
        </div>

        <table class="table-raket">
            <thead>
                <tr class="table-raket-row">
                    <th class="table-raket-header">No</th>
                    <th class="table-raket-header">Nama Pembeli</th>
                    <th class="table-raket-header">Produk</th>
                    <th class="table-raket-header">Jumlah</th>
                    <th class="table-raket-header">Metode Pembayaran</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1; foreach ($raket as $rkt) : ?>
                    <tr class="table-raket-row">
                        <td class="table-raket-data"><?php echo $i; ?></td>
                        <td class="table-raket-data"><?php echo $rkt['nama_pembeli']; ?></td>
                        <td class="table-raket-data"><?php echo $rkt['produk']; ?></td>
                        <td class="table-raket-data"><?php echo $rkt['jumlah']; ?></td>
                        <td class="table-raket-data"><?php echo $rkt['payment']; ?></td>
                        <td class="table-raket-data">
                            <div class="button-UD">
                                <a href="editdata.php?id=<?php echo $rkt['id_transaksi']; ?>">
                                    <button class="edit-data">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </button>
                                </a>
                                <a href="hapusdata.php?id=<?php echo $rkt['id_transaksi']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <button class="hapus-data">
                                        <i class="fa-solid fa-trash-can"></i> Hapus
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php $i++; endforeach ?>
            </tbody>
        </table>
    </main>
    <script src="script.js"></script>
</body>
</html>
