<?php
$servername = "localhost";
$username = "root";
$password =
$dbname = "demo";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 if ($conn = false) {
     echo "Ket noi that bai";
 }