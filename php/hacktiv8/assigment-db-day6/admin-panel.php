<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "info_blog";
    $conn = new mysqli($host, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM komentar ORDER BY id DESC";
    $result = $conn->query($sql);
    $sql2 = "SELECT * FROM kategori ORDER BY id DESC";
    $result2 = $conn->query($sql2);
    $sql3 = "SELECT * FROM pengguna ORDER BY id DESC";
    $result3 = $conn->query($sql3);

    $conn->close();
    ?>
    <div class="mb-2">
        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
        <input type="button" value="add post">
    </div>
    <br>
    <br>
    <table>
        <tr>
            <th>Nama</th>
            <th>Komentar</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            // echo json_encode($result->fetch_assoc());
        ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['comment']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="mb-2">
        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
        <input type="button" value="edit">
    </div>
    <div class="mb-2">
        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
        <input type="button" value="delete">
    </div>
    <br>
    <table>
        <tr>
            <th>Kategori</th>
        </tr>
        <?php
        while ($row = $result2->fetch_assoc()) {
            // echo json_encode($result->fetch_assoc());
        ?>
            <tr>
                <td><?php echo $row['namaKategori']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="mb-2">
        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
        <input type="button" value="edit">
    </div>
    <div class="mb-2">
        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
        <input type="button" value="delete">
    </div>
    <br>
    <table>
        <tr>
            <th>Pengguna</th>
        </tr>
        <?php
        while ($row = $result3->fetch_assoc()) {
            // echo json_encode($result->fetch_assoc());
        ?>
            <tr>
                <td><?php echo $row['username']; ?></td>
            </tr>

        <?php
        }
        ?>
    </table>
    <div class="mb-2">
        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
        <input type="button" value="edit">
    </div>
    <div class="mb-2">
        <!-- <button type="submit" onclick=updateFormData() class="btn btn-success col-12">Submit</button> -->
        <input type="button" value="delete">
    </div>
</body>

</html>