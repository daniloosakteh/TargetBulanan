<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #007bff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .btn-back {
            margin-top: 15px;
            text-align: center;
        }

        .btn-back a button {
            padding: 8px 20px;
            border: 1px solid #007bff;
            background-color: #ffffff;
            color: #007bff;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-back a button:hover {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
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
        $bulan = $_POST['bulan'];
        $capaian = $_POST['capaian'];
        $todo = $_POST['todo'];

        mysqli_query($koneksi, "UPDATE tbtarget_bulanan 
        SET bulan='$bulan', capaian='$capaian', todo='$todo' 
        WHERE id='$id'");

        header("Location: view-data.php");
        exit;
    }
    ?>

    <div class="container">
        <h2>Update Target Bulanan</h2>

        <form method="post">
            <label>Month</label>
            <input type="text" name="bulan" value="<?= htmlspecialchars($target['bulan']); ?>" required>

            <label>Target</label>
            <input type="text" name="capaian" value="<?= htmlspecialchars($target['capaian']); ?>" required>

            <label>To Do</label>
            <input type="text" name="todo" value="<?= htmlspecialchars($target['todo']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <div class="btn-back">
            <a href="view-data.php"><button>Kembali</button></a>
        </div>
    </div>

</body>

</html>
