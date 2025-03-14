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

        <!-- barra de navegação -->
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
                    <a class="nav-link fs-5 py-2 px-3" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="cursos.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="noticias.php">Notícias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <!--carrosel lugares -->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://unifor.br/documents/628515/0/desktop_laboratorios_de_informatica.png/0cfdc5c9-c351-a781-aebe-29e4874621ff?t=1531340138449" class="d-block w-100" style="height: 100vh; object-fit: cover;" alt="...">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
        <h1>Laboratório</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://altipisos.com.br/wp-content/uploads/2021/04/site-1.jpg" class="d-block w-100" style="height: 100vh; object-fit: cover;" alt="...">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
        <h1>Quadra Poliesportiva</h1>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.estudeseg.com.br/uploads/blog/140/quais-recursos-tem-disponivel-em-um-laboratorio-de.webp" class="d-block w-100" style="height: 100vh; object-fit: cover;" alt="...">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
        <h1>Laboratório de Enfermagem</h1>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>