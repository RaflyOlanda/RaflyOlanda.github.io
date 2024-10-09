<?php
require('koneksi.php');

$id = $_GET['id'];
$query = "SELECT * FROM rkt WHERE id_transaksi = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pembeli = $_POST['nama_pembeli'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $payment = $_POST['payment'];

    $query = "UPDATE rkt SET nama_pembeli='$nama_pembeli', produk='$produk', jumlah='$jumlah', payment='$payment' WHERE id_transaksi=$id";
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
    <title>Edit Raket</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="form-container">
        <h1>Edit Raket</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_pembeli">Nama Pembeli</label>
                <input type="text" name="nama_pembeli" value="<?php echo $data['nama_pembeli']; ?>" required>
            </div>
            <div class="form-group">
                <label for="produk">Nama Produk</label>
                <select name="produk" required>
                    <option value="Axforce JR" <?php echo $data['produk'] == 'Axforce JR' ? 'selected' : ''; ?>>Axforce JR</option>
                    <option value="Axforce Cannon Pro - 4U" <?php echo $data['produk'] == 'Axforce Cannon Pro - 4U' ? 'selected' : ''; ?>>Axforce Cannon Pro - 4U</option>
                    <option value="Axforce 40 - 4U" <?php echo $data['produk'] == 'Axforce 40 - 4U' ? 'selected' : ''; ?>>Axforce 40 - 4U</option>
                    <option value="Axforce Big Bang - 4U" <?php echo $data['produk'] == 'Axforce Big Bang - 4U' ? 'selected' : ''; ?>>Axforce Big Bang - 4U</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" value="<?php echo $data['jumlah']; ?>" required>
            </div>
            <div class="form-group">
                <label for="payment">Metode Pembayaran</label>
                <select name="payment" required>
                    <option value="Cash On Delivery" <?php echo $data['payment'] == 'Cash On Delivery' ? 'selected' : ''; ?>>Cash On Delivery</option>
                    <option value="BCA" <?php echo $data['payment'] == 'BCA' ? 'selected' : ''; ?>>BCA</option>
                    <option value="BRI" <?php echo $data['payment'] == 'BRI' ? 'selected' : ''; ?>>BRI</option>
                    <option value="GOPAY" <?php echo $data['payment'] == 'GOPAY' ? 'selected' : ''; ?>>GOPAY</option>
                </select>
            </div>
            <button type="submit" class="submit-button">Simpan</button>
            <a href="lihatdata.php" class="btn back">Kembali</a>
        </form>
    </div>
</body>
</html>
