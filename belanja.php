<?php
session_start();

if (!isset($_SESSION["klien"]) || empty($_SESSION["klien"]["nama"])) {
    header("Location: index.php");
    exit();
}

$dataBarang = array(
    "1" => array("nama" => "Baju", "ukuran" => array("S", "M", "L")),
    "2" => array("nama" => "Celana", "ukuran" => array("28", "30", "32")),
    "3" => array("nama" => "Sepatu", "ukuran" => array("39", "40", "41")),
    "4" => array("nama" => "Tas", "ukuran" => array("Small", "Medium", "Large"))
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Barang</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select, input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
<body>
    <h2>Selamat datang, <?php echo $_SESSION["klien"]["nama"]; ?>!</h2>
    <p>Anda sekarang dapat memilih bahan belanja.</p>

    <form action="process_belanja.php" method="get">
        <label for="barang">Pilih Barang:</label>
        <select name="barang">
            <?php
            foreach ($dataBarang as $kode => $barang) {
                echo "<option value=\"$kode\">{$barang['nama']}</option>";
            }
            ?>
        </select>
        <br>

        <label>Pilih Ukuran:</label>
        <?php
        foreach ($dataBarang as $kode => $barang) {
            echo "<p>{$barang['nama']}:</p>";
            foreach ($barang['ukuran'] as $ukuran) {
                echo "<input type=\"checkbox\" name=\"ukuran[$kode][]\" value=\"$ukuran\"> $ukuran ";
            }
        }
        ?>
        <br>

        <input type="submit" value="Cari">
    </form>
</body>
</html>


