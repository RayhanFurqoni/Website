<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "get_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$nim = $_GET['nim'];
$nama = $_GET['nama'];

$sql = "INSERT INTO data (nim, nama)
VALUES ('$nim', '$nama')";

if ($conn->query($sql) === TRUE) {
  echo "'result':'200', 'response':'data berhasil di masukan'";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?> -->
// $conn->close();