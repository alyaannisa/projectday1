<!DOCTYPE html>
<html lang="en">
<?php
require "database.php";

if (empty($_GET['id'])) header("Location: index.php");

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];
    $db = new Database();
    $result = $db->editData($id, $nama, $email, $notelp);
    if ($result) {
        echo "
                <script>
                alert('berhasil diganti');
                window.location.href='index.php';
                </script>
                ";
    } else {
        echo "
                <script>
                alert('Gagal diganti');
                window.location.href='index.php';
                </script>
                ";
    }
} else {
    $pdo = $koneksi->conn;
    $sql = "SELECT * FROM kontak WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = mysqli_fetch_all($q->get_result());
    $nama = $data[0][1];
    $email = $data[0][2];
    $notelp = $data[0][3];
}
?>

<head>
    <title>Edit Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <div>
            <div class="container" style="text-align: center; padding-top: 20px; padding-bottom: 40px;">
                <h3>Edit Data</h3>
            </div>
            <div class="container">
                <form action="edit.php?id=<?php echo $id ?>" method="POST">
                    <div class="mb-2">
                        <label for="inputNama1" class="form-label">Nama</label>
                        <input name="nama" type="text" placeholder="Masukkan Nama" class="form-control" required value="<?php echo $nama; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="inputRole1" class="form-label">Email</label>
                        <input name="email" type="text" placeholder="Masukkan Email" class="form-control" required value="<?php echo $email; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="inputAvailability1" class="form-label">No Telepon</label>
                        <input name="notelp" type="number" placeholder="Masukkan Nama" class="form-control" required value="<?php echo $notelp; ?>">
                    </div>
                    <div class="mb-2">
                        <div class="mb-2" style="display: flex; justify-content: center;">
                            <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
                            <button type="submit" name="simpan" class="btn btn-success" value="Simpan">Simpan</button>
                        </div>
                        <div class="mb-2" style="display: flex; justify-content: center;">
                            <a href="index.php" class="btn btn-primary">Kembali ke Homepage</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>