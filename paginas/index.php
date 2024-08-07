<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script src="https://kit.fontawesome.com/af4f3004cf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StyleT</title>
  <link rel="icon" href="../icon/logo.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/carrosel.css">
  <link rel="stylesheet" href="../css/text e caixa.css">
  <link rel="stylesheet" href="../css/produtos.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
  <nav class="navbar bg-dark border-bottom border-body" id="fixado" data-bs-theme="dark">
    <div class="container-fluid" id="tamanho-header">
      <a href="../paginas/index.php" class="navbar-brand"><img src="../logo/logo.png" width="120" height="125" alt="125"
          class="logo"></a>
      <form class="d-flex" role="search">
        <div class="barra">
          <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Pesquisar</button>
        </div>
        <!--icons-->
        <div class="icons">
          <span class="nomeUsuario">
            <?php 
            // Verifique se a chave 'nome' está definida na sessão antes de acessá-la
            if(isset($_SESSION['nome'])) {
                echo $_SESSION['nome']; 
            } 
            ?>
          </span>
          <a href="../paginas/perfil.php"><span class="material-symbols-outlined" id="pe">person</span></a>
          <a href="../paginas/carrinho.php">
            <span class="material-symbols-outlined" id="cart">shopping_cart_checkout</span>
          </a>
          <span class="material-symbols-outlined" onclick="clickMenu()" id="burguer">menu</span>
          <menu class="menu" id="menu">
            <ul class="listamenu">
              <li><a href="../paginas/index.php">Inicio</a></li>
              <li><a href="../paginas/cadastro.php">Cadastre-se</a></li>
              <li><a href="../paginas/sobre nos.php">Quem Somos</a></li>
              <li><a href="../paginas/login.php">Entrar</a></li>
              <li><a href="../paginas/faleconosco.php">Fale conosco</a></li>
              <li><a href="../logout/sair.php">Sair</a></li>
              
            </ul>
          </menu>
        </div>
      </form>
    </div>
    <div class="marcas">
      <a href="../paginas/index.php/..#content" class="espac" id="decoracao">NIKE</a>
      <a href="../paginas/index.php/..#content" class="espac" id="decoracao">PUMA</a>
      <a href="../paginas/index.php/..#content" class="espac" id="decoracao">ADIDAS</a>
      <a href="../paginas/index.php/..#content" class="espac" id="decoracao">VANS</a>
      <a href="../paginas/index.php/..#content" class="espac" id="decoracao">OLYMPIKUS</a>
    </div>
  </nav>
  <!-- carrosel botstrap-->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagens carrosel/Design sem nome (5).png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Aqui você encontra variedades de produtos.</h5>
          <p>Compre agora a marca que desejar.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagens carrosel/desgin.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>De um clique e garanta já o seu</h5>
          <p>Tênis da nike sports footwer.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagens carrosel/desgn7.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Adquira já o seu vans com 60% de desconto</h5>
          <p>Serve para o verão e para esportes radicais.</p>
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
  <div class="caixa">
    <ul class="text-promo">
      <li class="decora">TODA LOJA EM ATÉ 6X SEM JUROS</li>
      <li class="decora">FRETE GRÁTIS PARA SUDESTE A PARTIR DE R$ 299</li>
      <li class="decora">TROCA EM ATÉ 30 DIAS</li>
    </ul>
  </div>
  <div class="texnovidades">
    <h2 class="textnov">Novidades</h2>
    <p class="parag">Você não pode perder essa nova coleção.</p>
  </div>
  <!--produtos-->
  <div class="imagens" id="content">
  </div>
  <!-- Footer -->
  <footer class="bg-dark text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Sobre Nos:</h5>
          <p>
            Descubra a paixão por tênis na nossa loja online. Oferecemos uma ampla seleção dos últimos lançamentos e
            clássicos atemporais, garantindo que você encontre o par perfeito para o seu estilo. Sinta-se confiante e
            confortável em cada passo com os nossos tênis de alta qualidade.
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contato:</h5>
          <p>
            Queremos ouvir de você! Se tiver alguma dúvida sobre nossos produtos, pedidos ou qualquer outra coisa, não
            hesite em nos contatar. Nossa equipe de suporte está pronta para ajudar. Entre em contato conosco através do
            e-mail: <a href="">supportStylet@gmail.com</a> ou ligue para o número: <a href="">+71 98528-6557.</a>
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="textfooter">
      © 2024 Copyright: StyleT
    </div>
    <!-- Copyright -->
  </footer>
  <!--script menu burguer-->
  <script src="../script.js/menuburguer.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="../script.js/paginadinamica.js"></script>
</body>
</html>
