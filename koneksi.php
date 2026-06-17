<?php

$host = "localhost";
$dbname = "db_simulasi_pbo_ti1c_dindarinduprastya";
$username = "root";
$password = "";

try {
    $koneksi = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Koneksi berhasil";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>