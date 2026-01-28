<!-- get data dari form -->
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bulan = $_POST['bulan'];
    $capaian = $_POST['capaian'];
    $todo = $_POST['todo'];

    // insert data ke database
    $sql = "INSERT INTO tbtarget_bulanan (bulan, capaian, todo) VALUES ('$bulan', '$capaian', '$todo')";
    $result = mysqli_query($koneksi, $sql);

    // Tutup koneksi
    mysqli_close($koneksi);

    // Redirect ke halaman index.php
    header("Location: view-data.php");
    exit();
}
?>