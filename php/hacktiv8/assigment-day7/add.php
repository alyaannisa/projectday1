<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <div>
                <div>
                    <h1>Tambah Data</h1>
                </div>
                <div>
                    <form action="add.php" method="POST">
                        <div>
                            <label>Nama</label>
                            <input name="nama" type="text" placeholder="Masukkan Nama" required>
                        </div>
                        <div>
                            <label>Email</label>
                            <input name="email" type="text" placeholder="Masukkan Email" required>
                        </div>
                        <div>
                            <label>No Telepon</label>
                            <input name="notelp" type="text" placeholder="Masukkan Nomor Telepin" required>
                        </div>
                        <div>
                            <button type="submit" name="simpan">Simpan</button>
                            <a href="index.php">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    require "database.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $notelp = $_POST['notelp'];

        $db = new Database();
        $result = $db->addData($nama, $email, $notelp);
        if ($result) {
            echo "
            <script>
            alert('berhasil ditambah');
            window.location.href='index.php';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Gagal ditambah');
            window.location.href='index.php';
            </script>
            ";
        }
    }
?>