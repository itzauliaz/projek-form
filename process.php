<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi form
    if (empty($_POST["nama"]) || empty($_POST["email"])) {
        echo "Mohon lengkapi semua kolom!";
    } else {
        // Proses data yang diterima
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $password = $_POST["password"];


        // Simpan data identitas klien dalam session
        $_SESSION["klien"] = array(
            "nama" => $nama,
            "email" => $email,
            "alamat" => $alamat,
            "password" => $password
        );



         // Tampilkan pesan sambutan
         echo "<h2>Selamat datang, $nama!</h2>";
         echo "<p>Terima kasih telah log in dengan email: $email</p>";
         echo "<p>Selamat Berbelanja.</p>";
        // Tampilkan hasil
        header("Location: belanja.php");
        exit();
    }
} else {
    // Redirect jika mencoba mengakses langsung
    header("Location: index.php");
    exit();
}
?>
