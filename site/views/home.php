<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="libs/fontawesome/css/all.min.css">

    <style>
        .navbar-text {
            margin-right: 20px;
        }
    </style>
</head>

<body>

    <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://albarracinmovilidad.es/wp-content/uploads/2024/05/probarrrrrrrrrrrrr-1.png" alt="Logo" width="300px" class="d-inline-block align-top">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item d-block d-sm-none">
                        <a class="nav-link" href="#">Mis Pokemons Variocolor</a>
                    </li>
                    <li class="nav-item d-block d-sm-none">
                        <a class="nav-link" href="#">Mis Pokemons Con Suerte</a>
                    </li>
                    <li class="nav-item d-block d-sm-none">
                        <a class="nav-link" href="#">Mis Pokemons 100 IV</a>
                    </li>
                    <li class="nav-item d-block d-sm-none">
                        <a class="nav-link" href="#">Detalle Pokemon</a>
                    </li>

                    <!-- Mostrar en dispositivos más grandes (sm y superiores) -->
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="#">Variocolor</a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="#">Con Suerte</a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="#">100 IV</a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="#">Detalle Pokemon</a>
                    </li>
                </ul>

                <span class="navbar-text">
                    <b> <?php echo "Bienvenido, " . ucfirst(htmlspecialchars($user['username'])); ?></b>
                </span>


                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--NOTICIAS -->

    <H2 class="text-center mt-3">ULTIMAS NOTICIAS PARA LOS ENTRENADORES</H2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.pokemongolive.com/img/posts/2021-09-15-mega-evolution-update/2021-09-15-mega-evolution-update.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">Megaevoluciones</h5>
                        <p class="card-text">Las megaevoluciones han llegado a Pokemon Go, descubre como conseguir las megapiedras y como megaevolucionar a tus pokemons</p>
                        <a href="#" class="btn btn-primary">Leer mas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.pokemongolive.com/img/posts/2021-09-15-mega-evolution-update/2021-09-15-mega-evolution-update.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">Megaevoluciones</h5>
                        <p class="card-text">Las megaevoluciones han llegado a Pokemon Go, descubre como conseguir las megapiedras y como megaevolucionar a tus pokemons</p>
                        <a href="#" class="btn btn-primary">Leer mas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.pokemongolive.com/img/posts/2021-09-15-mega-evolution-update/2021-09-15-mega-evolution-update.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">Megaevoluciones</h5>
                        <p class="card-text">Las megaevoluciones han llegado a Pokemon Go, descubre como conseguir las megapiedras y como megaevolucionar a tus pokemons</p>
                        <a href="#" class="btn btn-primary">Leer mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="styles/bootstrap/bootstrap.bundle.min.js"></script>

</body>


</html>