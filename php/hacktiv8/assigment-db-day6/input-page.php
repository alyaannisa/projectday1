<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="judul1" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul1">
        </div>
        <div>
            <label for="konten1" class="form-label">Konten</label>
            <input type="text" class="form-control" name="konten" id="konten1">
        </div>
        <div>
            <label for="kategori1" class="form-label">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori1">
        </div>
        <div>
            <label for="inputGambar1" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="inputGambar1">
        </div>
        <div class="mb-2">
            <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
            <input type="submit" onclick=updateFormData() class="btn btn-success col-12" value="Submit">
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
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        exit;
    }
    // Mengambil data dari form
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $kategori = $_POST['kategori'];
    $gambar = base64_encode(file_get_contents($_FILES['gambar']['tmp_name']));

    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES['gambar']['name']);
    // move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);

    $sql = "INSERT INTO posting (judul, konten, kategori, gambar_utama) VALUES ('$judul', '$konten', '$kategori', '$gambar')";
    $result = $conn->query($sql);

    $conn->close();
    ?>

</body>

</html>