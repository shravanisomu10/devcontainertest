<?php
$servername = "localhost";
$username = "root";
$password = "Cybe\$c0m888";
$dbname = "myguests";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO myguests(name, address)
VALUES ('John', 'nz')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>