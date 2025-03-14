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
<!-- Barra de navegação -->
<style>
    .navbar-hidden {
        top: -80px; /* Esconde a navbar deslocando-a para cima */
        transition: top 0.3s ease-in-out;
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
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="cursos.php">Cursos</a>
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

<!-- Script para esconder a barra ao rolar para baixo e mostrar ao rolar para cima -->
<script>
    let prevScrollpos = window.pageYOffset;
    const navbar = document.getElementById("navbar");

    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;

        if (prevScrollpos > currentScrollPos) {
            navbar.classList.remove("navbar-hidden");
        } else {
            navbar.classList.add("navbar-hidden");
        }

        prevScrollpos = currentScrollPos;
    }
</script>

        <!--Imagem principal -->

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://maristalab.com.br/wp-content/uploads/2019/08/post75-1.png"
                        class="d-block w-100 ">
                </div>
            </div>
        </div>
        </div>


        <!-- Título Notícias -->
        <div class="row">

            <div class="col-md-5 mt-3">
                <hr>
            </div>
            <div class="col-md-2 text-center">
                <h2 class="fw-bold"
                    style="font-size: 2.5rem; border: widht 20px; display: inline-block; padding-bottom: 5px;">Historia
                </h2>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>