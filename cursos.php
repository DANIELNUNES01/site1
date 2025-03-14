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
      .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        transition: top 0.3s ease-in-out;
        z-index: 1000;
      }

      .navbar-hidden {
        top: -80px;
        /* Esconde a navbar ao rolar para baixo */
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
              <a class="nav-link fs-5 py-2 px-3" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 py-2 px-3" href="sobre.php">Sobre</a>
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
          // Rolar para baixo → Esconde a navbar
          navbar.classList.add("navbar-hidden");
        } else {
          // Rolar para cima → Mostra a navbar
          navbar.classList.remove("navbar-hidden");
        }

        lastScrollTop = scrollTop;
      });
    </script>
  </header>
<br>
<br>
<br>
<br>
<br>

  <!-- Cards dos cursos -->
  <div class="container">
    <div class="row g-4 ">
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top fixed-img"
            src="https://s1.static.brasilescola.uol.com.br/be/vestibular/o-tecnico-em-edificacao-auxilia-engenheiro-durante-obra-573ccf1e0d017.jpg"
            alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Edificação</h5>
            <p class="card-text">O curso de Edificações prepara profissionais para atuar na construção civil,
              desenvolvendo projetos, gerenciando obras e garantindo a qualidade das edificações. Com foco em técnicas
              construtivas, sustentabilidade e normas técnicas, forma especialistas essenciais para o setor.</p>
            <a href="edificacao.php" class="btn btn-primary">Visitar</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top fixed-img"
            src="https://www.catho.com.br/carreira-sucesso/wp-content/uploads/sites/3/2023/03/tecnico-de-enfermagem.jpg"
            alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Enfermagem</h5>
            <p class="card-text">O curso de Enfermagem capacita profissionais para atuar na promoção, prevenção e
              recuperação da saúde, prestando assistência humanizada. Com foco em técnicas de cuidado, ética e
              biossegurança, forma especialistas essenciais para a área da saúde.</p><br>
            <a href="enfermagem.php" class="btn btn-primary">Visitar</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top fixed-img marg"
            src="https://www.tecnicageracao.com.br/wp-content/uploads/2024/06/Post-de-blog-estetica-facial.jpg"
            alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Estética</h5>
            <p class="card-text">O curso de Estética capacita profissionais para atuar na beleza e bem-estar, oferecendo
              tratamentos faciais, corporais e capilares. Com foco em técnicas avançadas, saúde e inovação, forma
              especialistas essenciais para o setor estético.</p>
            <a href="estetica.php" class="btn btn-primary">Visitar</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top fixed-img"
            src="https://blog.xpeducacao.com.br/wp-content/uploads/2022/07/analise-e-desenvolvimento-de-sistemas-o-que-faz.jpg"
            alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Desenvolvimento de Sistemas</h5>
            <p class="card-text">O curso de Desenvolvimento de Sistemas capacita profissionais para criar, testar e
              manter softwares, aplicativos e bancos de dados. Com foco em programação, inovação e segurança, forma
              especialistas essenciais para a tecnologia.</p>
            <a href="desenvolvimento.php" class="btn btn-primary">Visitar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    .fixed-img {
      width: 100%;
      height: 200px;
      /* Defina a altura fixa para todas as imagens */
      object-fit: cover;
      /* Mantém a proporção e corta o excesso */
    }

    .card {

      border-block-end-color: brown;
      border: 0;

    }
  </style>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>