<?php

$dbhost     = "localhost";
$dbuser     = "root";
$dbpassword = "";
$dbname     = "portofolio01";

//Membuat koneksi
$conn   = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

//Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
else{
    echo "Koneksi berhasil";
}
?>