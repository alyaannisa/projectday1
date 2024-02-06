<?php 
 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $db = "kontak_oop";
    
    public $conn;
	function __construct(){
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function showData(){
        $query = "SELECT * FROM kontak";
        $result = mysqli_query($this->conn, $query);
        $data = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                // echo "Nama: " . $row["nama"]. " - Email: " . $row["email"]. " - No. Telp: " . $row["notelp"]. "<br>";
                $data[] = $row;
            }
        // } else {
        //     echo "Tidak ada data kontak.";
        // }
        }
        return $data;
    }
    
    function getDataById($id) {
        $sql = "SELECT * FROM kontak WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    function delete($id)
    {
        $kontak_id = mysqli_real_escape_string($this->conn,$id);
        $kontakDeleteQuery = "DELETE FROM kontak WHERE id='$kontak_id' LIMIT 1";
        $result = $this->conn->query($kontakDeleteQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function addData($nama, $email, $notelp) {
        $sql = "INSERT INTO kontak (nama, email, notelp) VALUES ('$nama', '$email', '$notelp')";
        if($this->conn->query($sql) === TRUE){
            return true;
        } else {
            return false;
        }
    }
    
    function editData($id, $nama, $email, $notelp){
        $sql = "UPDATE kontak SET nama = '$nama', email = '$email', notelp = '$notelp' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
        // if($this->conn->query($sql) === TRUE){
        //     return true;
        // } else {
        //     return false;
        // }
    }
        // $stmt = $this->conn->prepare($sql);
        // $stmt->bindParam(':nama', $nama);
        // $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':notelp', $notelp);
        // $stmt->execute();
        // return $stmt->rowCount();

    function closeConnection(){
        mysqli_close($this->conn);
    }
 
}
$koneksi = new database();
?>

