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
<!-- Lembrar de organizar na pasta cursos
  -->
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
                    <a class="nav-link fs-5 py-2 px-3" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="../sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="../cursos.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 py-2 px-3" href="../noticias.php">Notícias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://ctarj.org.br/wp-content/uploads/2020/10/tecnico-em-edificacoes-1140x458.jpg" class="d-block w-100" alt="Curso de Edificações">
      <div class="carousel-caption d-md-block" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; text-align: center; color: white; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
        <h2 class="display-4">Edificações</h2>
        <p class="lead">O curso de Edificações prepara profissionais para projetar, gerenciar e executar obras com qualidade e segurança.</p>
      </div>
    </div>
  </div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </header>
</body>

</html>