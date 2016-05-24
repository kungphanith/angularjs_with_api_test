<?php
$servername = "localhost";
$username = "root";
$password = "2903@kpn1995";

// Create connection
$conn = new mysqli($servername, $username, $password, 'student');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tbl_student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
    //  while($row = $result->fetch_assoc()) {
    //      echo "<br> id: ". $row["id"]. " - Name: ". $row["phone"]. ", Address " . $row["address"] . "<br>";
    //  }
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    $data = json_encode($rows);
    echo $data;

} else {
     echo "0 results";
}
$conn->close();

?>
