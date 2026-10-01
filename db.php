<?php
// Helper koneksi database cPanel Sakuci
$dbHost = 'localhost';
$dbPort = 3306;
$dbName = 'db_parklib';
$dbUser = 'db_parklib_6b062';
$dbPass = '1b398e6ca4410f82f0b54f29';

try {
    $pdo = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Koneksi database gagal: ' . $e->getMessage());
}
