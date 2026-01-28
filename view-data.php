<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Target Bulanan</title>
    <link rel="stylesheet" href="styleVIEW.css">
</head>

<body>

<?php
include 'config.php';

// query untuk mendapatkan data dari database
$sql = "SELECT * FROM tbtarget_bulanan";
$result = mysqli_query($koneksi, $sql);
?>

<div class="container">
    <h2>Data Target Bulanan</h2>

    <a href="index.php" class="btn-back">Kembali</a>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Target</th>
                    <th>To Do</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['bulan']); ?></td>
                        <td><?= htmlspecialchars($row['capaian']); ?></td>
                        <td><?= htmlspecialchars($row['todo']); ?></td>
                        <td>
                            <a href="update.php?id=<?= urlencode($row['id']); ?>" class="btn-update">Update</a>
                            <a href="hapus.php?id=<?= urlencode($row['id']); ?>" class="btn-delete">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="empty">Data tidak ditemukan</p>
    <?php endif; ?>
</div>

</body>
</html>
