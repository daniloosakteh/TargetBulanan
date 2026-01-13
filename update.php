<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'config.php';

    $id = $_GET['id'];

    // ambil data lama
    $sql = mysqli_query($koneksi, "SELECT * FROM tbtarget_bulanan WHERE id='$id'");
    $target = mysqli_fetch_assoc($sql);

    // proses update
    if (isset($_POST['update'])) {
        $month = $_POST['month'];
        $target = $_POST['target'];
        $to_do = $_POST['to_do'];

        mysqli_query($koneksi, "UPDATE tbtarget_bulanan 
        SET month='$month', target='$target', to_do='$to_do' 
        WHERE id='$id'");

        header("Location: view-data.php");
        exit;
    }
    ?>

    <div class="container">
        <h2>Update Target Bulanan</h2>

        <form method="post">
            <label>Month</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($target['month']); ?>" required>

            <label>Target</label>
            <input type="text" name="kelas" value="<?= htmlspecialchars($target['target']); ?>" required>

            <label>To Do</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($target['to_do']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <br>
        <a href="view-data.php"><button>Kembali</button></a>
    </div>

</body>

</html>