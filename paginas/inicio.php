<?php
include_once("../componentes/header.php");

?>


<body>


<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MotorCloud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ingresar</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>



<section class="hero text-center">
    <div class="container">
        <h1 class="display-5 fw-bold">Encuentra tu Auto Ideal en MotorCloud</h1>
        <p class="lead">Compra y vende vehículos de forma fácil, rápida y segura.</p>
        <div class="input-group mt-4 w-75 mx-auto">
            <input type="text" class="form-control" placeholder="Buscar autos por marca, modelo o año...">
            <button class="btn btn-primary">Buscar</button>
        </div>
    </div>
</section>


<div class="container mt-5">
    <h2 class="fw-bold mb-4 text-primary">Autos Destacados</h2>
    <div class="row g-4">

    
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg" class="card-img-top" alt="Auto">
                <div class="card-body">
                    <h5 class="card-title">Toyota Corolla 2018</h5>
                    <p class="card-text text-muted">$18.000 USD - 75.000 km</p>
                    <a href="#" class="btn btn-primary w-100">Ver más</a>
                </div>
            </div>
        </div>

    
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg" class="card-img-top" alt="Auto">
                <div class="card-body">
                    <h5 class="card-title">Ford Fiesta 2017</h5>
                    <p class="card-text text-muted">$10.500 USD - 97.000 km</p>
                    <a href="#" class="btn btn-primary w-100">Ver más</a>
                </div>
            </div>
        </div>

  
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg" class="card-img-top" alt="Auto">
                <div class="card-body">
                    <h5 class="card-title">Chevrolet Cruze 2020</h5>
                    <p class="card-text text-muted">$22.000 USD - 40.000 km</p>
                    <a href="#" class="btn btn-primary w-100">Ver más</a>
                </div>
            </div>
        </div>

    </div>
</div>


  <?php
include_once("../componentes/footer.php");

?>