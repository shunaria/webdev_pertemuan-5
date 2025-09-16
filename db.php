<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seria";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("Koneksi Gagal: " . mysqli_connect_error());
}


?>