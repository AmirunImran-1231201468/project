<?php
// Replace these with your actual credentials
$host = 'localhost';
$dbname = 'milkshake_haven';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("SELECT 1"); // Test query
    echo "✅ Database connection successful!";
} catch (PDOException $e) {
    die("❌ Connection failed: " . $e->getMessage());
}