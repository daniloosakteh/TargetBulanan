<?php
include 'config.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tbtarget_bulanan WHERE id='$id'");

header("Location: view-data.php");
exit;
?>