<?php
// web/db.php
// Simple PDO-based DB wrapper using env vars. No credentials here.

$host = getenv('DB_HOST') ?: 'localhost';
$port = getenv('DB_PORT') ?: '5432';
$dbname = getenv('DB_NAME') ?: 'php_test';
$user = getenv('DB_USER') ?: 'postgres';
$pass = getenv('DB_PASS') ?: '';

$dsn = "pgsql:host={$host};port={$port};dbname={$dbname};";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    // In production you would not echo the error; log it instead
    echo "DB connection failed: " . htmlspecialchars($e->getMessage());
    exit;
}
