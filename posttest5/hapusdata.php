<?php
require('koneksi.php');
$id = $_GET['id'];

// Proses hapus data ketika konfirmasi
if (isset($_POST['hapus'])) {
    $query_delete = "DELETE FROM rkt WHERE id_transaksi = $id";

    if (mysqli_query($conn, $query_delete)) {
        // Redirect ke halaman daftar transaksi jika berhasil
        header('Location: lihatdata.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Transaksi Raket</title>
    <link rel="stylesheet" href="hapus.css"> <!-- Gunakan CSS yang sama -->
</head>

<body>
    <div class="edit-form-container">
        <h2>Hapus Transaksi Raket</h2>
        <p>Apakah Anda yakin ingin menghapus data transaksi ini?</p>
        <div class="button-group">
            <form action="" method="POST">
                <button type="submit" name="hapus" class="btn update">Ya, Hapus</button>
            </form>
            <a href="lihatdata.php" class="btn cancel">Batal</a>
        </div>
    </div>
</body>
</html>
