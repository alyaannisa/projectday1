<?php
require "database.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $db = new Database();
    $data = $db->getDataById($id);

    if($data){
        echo "<h2>Are you sure you want to delete this data?</h2>";
        echo "<p>ID: " . $data['id'] . "</p>";
        echo "<p>Nama: " . $data['nama'] . "</p>";
        echo "<p>Email: " . $data['email'] . "</p>";
        echo "<p>No. Telp: " . $data['notelp'] . "</p>";
        echo "<form method='post' action='delete.php'>";
        echo "<input type='hidden' name='id' value='" . $data['id'] . "'>";
        echo "<input type='submit' name='delete' value='Delete'>";
        echo "</form>";
    } else {
        echo "Tidak ada ID";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $db = new Database();
    $result = $db->delete($id);
    if ($result) {
        echo "
        <script>
        alert('berhasil dihapus');
        window.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal dihapus');
        window.location.href='index.php';
        </script>
        ";
    }
}
?>