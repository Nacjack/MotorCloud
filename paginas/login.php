<?php
include_once("../componentes/header.php");

?>


<div class="page-container">
    <div class="content-wrap">
        <main>
<div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
<div class="card shadow p-4" style="max-width: 400px; width: 100%;">
<h3 class="text-center mb-4 text-primary fw-bold"><a href="../paginas/inicio.php" class="text-decoration-none">MotorCloud</a></h3>
<h5 class="text-center mb-3">Iniciar Sesión</h5>
<form action="login_process.php" method="POST">
<div class="mb-3">
<label class="form-label">Correo electrónico</label>
<input type="email" class="form-control" name="email" required>
</div>
<div class="mb-3">
<label class="form-label">Contraseña</label>
<input type="password" class="form-control" name="password" required>
</div>
<button type="submit" class="btn btn-primary w-100">Ingresar</button>
<p class="text-center mt-3">¿No tienes cuenta? <a href="../paginas/registro.php">Regístrate</a></p>
</form>
</div>
</div>
</main>
    </div>
</div>





  <?php
include_once("../componentes/footer.php");

?>