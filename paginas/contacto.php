<?php
include_once("../componentes/header.php");
?>

<div class="page-container">
    <div class="content-wrap">

        <main class="container py-4">
          
            <div class="card shadow contacto-card">
                <div class="card-body">
                    <h2 class="mb-4">Contacto</h2>

                    <div class="mb-4">
                        <p><i class="bi bi-telephone-fill text-primary"></i> <strong>Teléfono:</strong> +54 9 11 4587-<?php echo rand(100,999); ?></p>
                        <p><i class="bi bi-envelope-fill text-primary"></i> <strong>Correo:</strong> motorcloud@gmail.com</p>
                        <p><i class="bi bi-geo-alt-fill text-primary"></i> <strong>Dirección:</strong> Ricardo Ford <?php echo rand(100,900); ?>, Buenos Aires</p>
                    </div>

                    <h4 class="mb-3">Envíanos un mensaje</h4>

                    <form class="row g-3 contacto-form">

                        <div class="col-md-6">
                            <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="correo" class="form-control" placeholder="Tu correo" required>
                        </div>

                        <div class="col-12">
                            <textarea name="mensaje" class="form-control" rows="4" placeholder="Escribe tu mensaje..." required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Enviar mensaje</button>
                        </div>

                    </form>
                </div>
            </div>

        </main>

    </div>

 
    <?php include_once("../componentes/footer.php"); ?>

</div>
