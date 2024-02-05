<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">
        <div class="card-form container" id="dataFormulir" style="background-color: #ffffff; margin-top: 20px;">
            <form action="" method="GET">
                <div class="mb-2">
                    <label for="inputUsername1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="inputUsername1">
                </div>
                <div class="mb-2">
                    <label for="inputPass1" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" id="inputPass1">
                </div>
                <div class="mb-2">
                    <div class="mb-2">
                        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
                        <input type="submit" onclick=updateFormData() class="btn btn-success col-12" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </form>
    <?php
        $host = "localhost";
        $username = "root"; // Ganti dengan username MySQL Anda
        $password = ""; // Ganti dengan password MySQL Anda
        $database = "info_blog"; // Ganti dengan nama database Anda

        // Membuat koneksi ke database
        $conn = new mysqli($host, $username, $password, $database);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if ($_SERVER["REQUEST_METHOD"] != "POST"){
            exit;
        }
        // Mengambil data dari form
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        // Mengecek kecocokan username dan password di database
        $sql = "SELECT * FROM pengguna WHERE username='$uname' AND password='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Login berhasil
            echo "Login berhasil!";
        } else {
            // Login gagal
            echo "Login gagal. Username atau password salah.";
        }

        $conn->close();
    ?>
</body>

</html>