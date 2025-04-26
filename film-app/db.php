<?php
$host = "localhost";
$user = "root";
$pass = "Yasmine01.UB";  // kosongkan password jika tidak disetel
$db   = "film_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
