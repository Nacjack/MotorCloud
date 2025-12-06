<?php
include_once("../componentes/header.php");

?>



<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
<div class="card shadow p-4" style="max-width: 400px; width: 100%;">
<h3 class="text-center mb-4 text-primary fw-bold">MotorCloud</h3>
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
<p class="text-center mt-3">¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>
</form>
</div>
</div>
</body>


  <?php
include_once("../componentes/footer.php");

?>