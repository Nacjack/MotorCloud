<?php
require_once __DIR__ . "/config/db.php"; // ajusta la ruta si hace falta

try {
    $stmt = $pdo->query("SELECT COUNT(*) AS c FROM usuarios");
    $row = $stmt->fetch();
    echo "Conexión OK — usuarios existentes: " . ($row['c'] ?? 0);
} catch (Exception $e) {
    echo "Error al consultar la DB: " . $e->getMessage();
}
