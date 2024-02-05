<?php
class database{
    var $host = "localhost";
    var $username = "root"; // Ganti dengan username MySQL Anda
    var $password = ""; // Ganti dengan password MySQL Anda
    var $database = "formtask";

    function __construct(){
        $koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if($koneksi){
            echo "Koneksi database MySQL dan PHP berhasil";
        }else{
            echo "Koneksi databse MySQL dan PHP gagal";
        }
    }
}
$koneksi = new database;
?>