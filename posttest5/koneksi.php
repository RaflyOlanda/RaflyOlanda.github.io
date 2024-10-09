<?php
$host = 'localhost:3307';
$username = 'root';
$password = ''; 
$database = 'dbrkt';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
