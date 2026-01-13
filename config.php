<!-- Koneksi ke database -->
<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbtarget_bulanan");

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>