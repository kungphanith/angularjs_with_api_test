<?php
$servername = "localhost";
$username = "root";
$password = "2903@kpn1995";

$data = json_decode(file_get_contents("php://input"));
$name = mysql_real_escape_string($data->studentName);
$phone = mysql_real_escape_string($data->phone);
$address = mysql_real_escape_string($data->address);

// Create connection
$conn = new mysqli($servername, $username, $password, 'student');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT into tbl_student (`name`, `phone`, `address`) VALUES('".$name."', '".$phone."', '".$address."') ";
$result = $conn->query($sql);
echo ($sql. "hello");
// if ($result->num_rows > 0) {
//      // output data of each row
//     //  while($row = $result->fetch_assoc()) {
//     //      echo "<br> id: ". $row["id"]. " - Name: ". $row["phone"]. ", Address " . $row["address"] . "<br>";
//     //  }
//     $rows = array();
//     while($r = mysqli_fetch_assoc($result)) {
//         $rows[] = $r;
//     }
//     $data = json_encode($rows);
//     echo $data;
//
// } else {
//      echo "0 results";
// }
$conn->close();

?>
