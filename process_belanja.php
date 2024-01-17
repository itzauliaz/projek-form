<?php
session_start();

if (!isset($_SESSION["klien"]) || empty($_SESSION["klien"]["nama"])) {
    header("Location: index.php");
    exit();
}

if (!isset($_GET["barang"]) || empty($_GET["barang"])) {
    echo "Pilihan barang tidak valid!";
    exit();
}

$dataBarang = array(
    "1" => array("nama" => "Baju", "ukuran" => array("S", "M", "L")),
    "2" => array("nama" => "Celana", "ukuran" => array("28", "30", "32")),
    "3" => array("nama" => "Sepatu", "ukuran" => array("39", "40", "41")),
    "4" => array("nama" => "Tas", "ukuran" => array("Small", "Medium", "Large"))
);

$barangTerpilih = $_GET["barang"];
$namaBarangTerpilih = $dataBarang[$barangTerpilih]['nama'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Berhasil</title>
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

        div {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #3498db;
            text-decoration: none;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Pembelian Berhasil!</h2>
    <p>Terima kasih, <?php echo $_SESSION["klien"]["nama"]; ?>, telah membeli <?php echo $namaBarangTerpilih; ?>.</p>

    <!-- Proses pemilihan ukuran -->
    <?php if (isset($_GET["ukuran"]) && is_array($_GET["ukuran"][$barangTerpilih])) : ?>
        <p>Anda memilih ukuran: <?php echo implode(", ", $_GET["ukuran"][$barangTerpilih]); ?></p>
    <?php else : ?>
        <p>Anda tidak memilih ukuran.</p>
    <?php endif; ?>

    <div>
        <a href="belanja.php">Kembali ke Halaman Belanja</a>
        <a href="konfirmasi.php">Konfirmasi Barang Belanja Anda</a>

    </div>
</body>
</html>



