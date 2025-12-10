<?php
session_start();
require_once("../config/db.php");

$correo = trim($_POST["email"]);
$pass = $_POST["password"];

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = ?");
$stmt->execute([$correo]);

if ($stmt->rowCount() === 0) {
    $_SESSION["error_login"] = "No existe una cuenta con ese correo.";
    header("Location: login.php");
    exit;
}

$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificar contraseña
if (!password_verify($pass, $user["password"])) {
    $_SESSION["error_login"] = "Contraseña incorrecta.";
    header("Location: login.php");
    exit;
}

// Login OK
$_SESSION["usuario"] = $user["nombre"];
$_SESSION["correo"] = $user["correo"];

header("Location: inicio.php");
exit;
