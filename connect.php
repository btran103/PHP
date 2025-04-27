<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlysinhvien";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Ket noi that bai: " . mysqli_connect_error());
}

echo "Ket noi thanh cong!";
?>
