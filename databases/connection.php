<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'complaints';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
if (!$conn) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
