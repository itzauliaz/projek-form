<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Shopping</title>
    <script>
        function validateForm() {
            var nama = document.forms["dataForm"]["nama"].value;
            var email = document.forms["dataForm"]["email"].value;

            if (nama == "" || email == "") {
                alert("Mohon lengkapi semua kolom!");
                return false;
            }
            return true;
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 300px;
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

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
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

        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Belanja</h1>
    <p>Silakan masukkan data Anda untuk memulai.</p>
    
    <form name="dataForm" action="process.php" method="post" onsubmit="return validateForm()">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        
        <input type="submit" value="Kirim">
    </form>

    <hr>

    <p>Belum punya akun? <a href="index.php">Daftar di sini</a>.</p>
</body>
</html>

