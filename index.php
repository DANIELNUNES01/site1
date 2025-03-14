<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
    <style>
    .navbar-hidden {
        top: -80px;
        /* Esconde a navbar deslocando-a para cima */
        transition: top 0.3s ease-in-out;
    }

    /* Exibir o dropdown quando passar o mouse */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    /* Ajustar posição e estilo */
    .dropdown-menu {
        display: none; /* Inicia oculto */
        position: absolute;
        background-color: #343a40; /* Cor de fundo escura */
        border: none;
    }

    /* Estilo dos links dentro do dropdown */
    .dropdown-menu .dropdown-item {
        color: white;
        padding: 10px 20px;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #495057; /* Cinza escuro ao passar o mouse */
    }
</style>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2020/11/cropped-logo-em-pdf-ceep.png"
                alt="Inicio" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="text-center navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item dropdown"> 
                    <a class="nav-link fs-5 py-2 px-3 dropdown-toggle" href="cursos.php">
                        Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="curso1.php">Agricultura</a></li>
                        <li><a class="dropdown-item" href="curso2.php">Agronegocio</a></li>
                        <li><a class="dropdown-item" href="curso3.php">Desenvolvimento de sistemas</a></li>
                        <li><a class="dropdown-item" href="curso4.php">Curso 4</a></li>
                        <li><a class="dropdown-item" href="curso5.php">Curso 5</a></li>
                        <li><a class="dropdown-item" href="curso6.php">Curso 6</a></li>
                        <li><a class="dropdown-item" href="curso7.php">Curso 7</a></li>
                        <li><a class="dropdown-item" href="curso8.php">Curso 8</a></li>
                        <li><a class="dropdown-item" href="curso9.php">Curso 9</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="areas.php">Áreas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="noticias.php">Notícias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <script>
            let lastScrollTop = 0;
            const navbar = document.getElementById("navbar");

            window.addEventListener("scroll", function () {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Rola para baixo → Esconde a navbar
                    navbar.classList.add("navbar-hidden");
                } else {
                    // Rola para cima → Mostra a navbar
                    navbar.classList.remove("navbar-hidden");
                }

                lastScrollTop = scrollTop;
            });

        </script>

        <!-- Imagem principal 
        <div class="container-fluid p-0">
            <img src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2020/12/escla.png"
                alt="Imagem do Colégio"
                class="img-fluid w-100"
                style="height: 100vh; object-fit: contain; margin: 0;">
        </div>-->





    </header>

    <div id="carouselExampleSlidesOnly" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="position: relative;">
                <img src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2020/12/escla.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"
                    style="position: absolute; top: 50%; left: 0; transform: translateY(-50%); width: 100%; text-align: left;">
                    <div class="container text-start">
                        <h2 class="display-4">Bem vindo ao ceep!</h2>
                        <p class="lead">Seu texto descritivo aqui.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <br>
    <!-- Título Notícias -->
    <div class="row">

        <div class="col-md-5 mt-3">
            <hr>
        </div>
        <div class="col-md-2 text-center">
            <h2 class="fw-bold"
                style="font-size: 2.5rem; border: widht 20px; display: inline-block; padding-bottom: 5px;">Notícias</h2>
        </div>
        <div class="col-md-5 mt-3">
            <hr>
        </div>

    </div>
    <!-- Título Notícias
<div class="container text-center mt-4">
    <h2 class="fw-bold" style="font-size: 2.5rem; border-bottom: 3px solid #000; display: inline-block; padding-bottom: 5px;">
        Notícias
    </h2>
</div>
 -->

    <br>



  
            <!-- Slide 1 -->
           <!-- Carrossel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2021/10/WhatsApp-Image-2021-10-01-at-15.20.33-300x300.jpeg" alt="Imagem do card 1">
                        <div class="card-body">
                            <p class="card-text">Texto do card 1</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2021/11/feed-escola-300x300.png" alt="Imagem do card 2">
                        <div class="card-body">
                            <p class="card-text">Texto do card 2</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-17-at-08.19.20-300x300.jpeg" alt="Imagem do card 3">
                        <div class="card-body">
                            <p class="card-text">Texto do card 3</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-17-at-08.19.20-300x300.jpeg" alt="Imagem do card 4">
                        <div class="card-body">
                            <p class="card-text">Texto do card 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="row">
                <!-- Card 5 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2021/10/WhatsApp-Image-2021-10-01-at-15.20.33-300x300.jpeg" alt="Imagem do card 5">
                        <div class="card-body">
                            <p class="card-text">Texto do card 5</p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2021/11/feed-escola-300x300.png" alt="Imagem do card 6">
                        <div class="card-body">
                            <p class="card-text">Texto do card 6</p>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-17-at-08.19.20-300x300.jpeg" alt="Imagem do card 7">
                        <div class="card-body">
                            <p class="card-text">Texto do card 7</p>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-3">
                    <div class="card mx-auto" style="width: 20rem;">
                        <img class="card-img-top" src="https://escolatecnicalaranjeiras.com.br/wp-content/uploads/2022/02/WhatsApp-Image-2022-02-04-at-17.46.40-300x300.jpeg" alt="Imagem do card 8">
                        <div class="card-body">
                            <p class="card-text">Texto do card 8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Controles do Carrossel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>


    <!-- CSS para padronizar as imagens dos cards -->
    <style>
        .card-img-top {
            object-fit: cover;
            /* A imagem cobre o espaço sem distorcer */
            width: 100%;
            height: 200px;
        }
    </style>

    </div>
    </div>


    </style>
    
    </div>
    </div>

    </div>
    </div>


  
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
      
</body>

</html>