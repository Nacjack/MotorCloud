<?php
session_start();
require_once("../config/db.php");

$nombre = trim($_POST["nombre"]);
$correo = trim($_POST["email"]);
$pass = $_POST["password"];
$confirmar = $_POST["confirmar"];

$errores = [];

// Validaciones
if ($pass !== $confirmar) {
    $errores[] = "Las contraseñas no coinciden.";
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "Correo inválido.";
}

if (!empty($errores)) {
    $_SESSION["errores_registro"] = $errores;
    header("Location: registro.php");
    exit;
}

// Verificar si ya existe el correo
$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE correo = ?");
$stmt->execute([$correo]);

if ($stmt->rowCount() > 0) {
    $_SESSION["errores_registro"] = ["Ya existe una cuenta con ese correo."];
    header("Location: registro.php");
    exit;
}

// Registrar usuario
$hash = password_hash($pass, PASSWORD_DEFAULT);
$insert = $pdo->prepare("INSERT INTO usuarios (nombre, correo, password) VALUES (?, ?, ?)");
$insert->execute([$nombre, $correo, $hash]);

// Iniciar sesión automáticamente
$_SESSION["usuario"] = $nombre;
$_SESSION["correo"] = $correo;

header("Location: inicio.php");
exit;
