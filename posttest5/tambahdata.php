<?php
require('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pembeli = $_POST['nama_pembeli'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $payment = $_POST['payment'];

    $query = "INSERT INTO rkt (nama_pembeli, produk, jumlah, payment) VALUES ('$nama_pembeli', '$produk', '$jumlah', '$payment')";
    mysqli_query($conn, $query);

    header('Location: lihatdata.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Raket</title>
    <link rel="stylesheet" href="tambah.css">
    <script>
        function showImage(select) {
            var image = document.getElementById("product-image");
            if (select.value) {
                image.src = "images/" + select.value + ".jpg"; // Ubah ini sesuai dengan nama file gambar Anda
            } else {
                image.src = ""; // Clear image if no product is selected
            }
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h1>Tambah Raket</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_pembeli">Nama Pembeli</label>
                <input type="text" name="nama_pembeli" required>
            </div>
            <div class="form-group">
                <label for="produk">Nama Produk</label>
                <select name="produk" onchange="showImage(this);" required>
                    <option value="">Pilih Produk</option>
                    <option value="Axforce JR">Axforce JR</option>
                    <option value="Axforce Cannon Pro - 4U">Axforce Cannon Pro - 4U</option>
                    <option value="Axforce 40 - 4U">Axforce 40 - 4U</option>
                    <option value="Axforce Big Bang - 4U">Axforce Big Bang - 4U</option>
                    <!-- Tambahkan produk lain sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <img id="product-image" src="" alt="Gambar Raket" style="width: 300px; height: auto; display: none; margin-top: 10px;">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="payment">Metode Pembayaran</label>
                <select name="payment" required>
                    <option value="Cash On Delivery">Cash On Delivery</option>
                    <option value="BCA">BCA</option>
                    <option value="BRI">BRI</option>
                    <option value="GOPAY">GOPAY</option>
                </select>
            </div>
            <button type="submit" class="submit-button">Tambah</button>
            <a href="lihatdata.php" class="btn back">Kembali</a>
        </form>
    </div>
</body>
</html>
