<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotorCloud - Compra y Venta de Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="../img/icono.ico" type="image/x-icon" />

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid px-3">
    <a class="navbar-brand fw-bold" href="../paginas/inicio.php">MotorCloud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
<?php if (!isset($_SESSION["usuario"])): ?>

    <li class="nav-item"><a class="nav-link" href="../paginas/login.php">Ingresar</a></li>
    <li class="nav-item"><a class="nav-link" href="../paginas/registro.php">Registrarse</a></li>

<?php else: ?>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?= $_SESSION["usuario"]; ?></a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="../paginas/logout.php">Cerrar sesión</a></li>
        </ul>
    </li>

<?php endif; ?>

    <li class="nav-item"><a class="nav-link" href="../paginas/contacto.php">Contacto</a></li>
</ul>
    </div>
  </div>
</nav>