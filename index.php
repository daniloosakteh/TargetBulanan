<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARGET BULANAN</title>
</head>

<body>
    <?php
    // Koneksi ke database
    include 'config.php';
    ?>
    <!-- form inputan -->
    <form action="prosesinput.php" method="post">
        <label>Month</label>
        <input type="text" name="bulan">
        <label>Target</label>
        <input type="text" name="capaian">
        <label>To Do</label>
        <input type="text" name="todo">
        <input type="submit" value="Kirim">
    </form>

</body>

</html>