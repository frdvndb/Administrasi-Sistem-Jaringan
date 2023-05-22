<?php
// Data untuk koneksi database
$DBHOST = "localhost";
$DBNAME = "data_mahasiswa";
$USERNAME = "farid";
$PASSWORD = "Farid15";

// Melakukan koneksi ke database
try {
    $conn = new PDO("mysql:host=$DBHOST;dbname=$DBNAME", $USERNAME, $PASSWORD);
} catch (\Throwable $e) {
    echo "Koneksi Gagal, " . $e->getMessage();
}
?>