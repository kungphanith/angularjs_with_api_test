<?php
$servername = "localhost";
$username = "root";
$password = "2903@kpn1995";

$data = json_decode(file_get_contents("php://input"));
$id = mysql_real_escape_string($data->id);


// Create connection
$conn = new mysqli($servername, $username, $password, 'student');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM tbl_student where id = ".$id." ";
$result = $conn->query($sql);
echo ($sql. "hello");
$conn->close();

?>
