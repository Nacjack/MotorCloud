<?php
include_once("../componentes/header.php");

?>

<div class="page-container">
    <div class="content-wrap">
<main>
<div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
<div class="card shadow p-4" style="max-width: 450px; width: 100%;">
<h3 class="text-center mb-4 text-primary fw-bold"><a  href="../paginas/inicio.php" class="text-decoration-none">MotorCloud</a></h3>
<h5 class="text-center mb-3">Crear Cuenta</h5>



<?php
if (isset($_SESSION["errores_registro"])) {
    echo '<div class="alert alert-danger"><ul>';
    foreach ($_SESSION["errores_registro"] as $e) {
        echo "<li>$e</li>";
    }
    echo '</ul></div>';
    unset($_SESSION["errores_registro"]);
}
?>


<form action="registro_process.php" method="POST">
<div class="mb-3">
<label class="form-label">Nombre completo</label>
<input type="text" class="form-control" name="nombre" required>
</div>
<div class="mb-3">
<label class="form-label">Correo electrónico</label>
<input type="email" class="form-control" name="email" required>
</div>
<div class="mb-3">
<label class="form-label">Contraseña</label>
<input type="password" class="form-control" name="password" required>
</div>
<div class="mb-3">
<label class="form-label">Repetir contraseña</label>
<input type="password" class="form-control" name="confirmar" required>
</div>
<button type="submit" class="btn btn-primary w-100">Registrarse</button>
<p class="text-center mt-3">¿Ya tienes cuenta? <a href="../paginas/login.php">Inicia sesión</a></p>
</form>

</div>
</div>

</main>

    </div>
</div>









  <?php
include_once("../componentes/footer.php");

?>