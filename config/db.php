<?php
// config/db.php
$host = "127.0.0.1";
$dbname = "motorcloud";
$user = "root";
$pass = ""; // si en XAMPP no tenés contraseña, dejalo vacío

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    // para desarrollo mostrar error, en producción registrar y mostrar mensaje genérico
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
