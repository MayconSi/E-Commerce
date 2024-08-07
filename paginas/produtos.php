<?php
include ('../conexao/sessoes.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StyleT</title>
  <link rel="stylesheet" href="../css/infor-de-produtos.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../icon/logo.ico" type="image/x-icon">
</head>

<body>
  <nav class="navbar bg-dark border-bottom border-body" id="fixado" data-bs-theme="dark">
    <div class="container-fluid">
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
            if (isset($_SESSION['nome'])) {
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
  <!--detalhes de produtos-->
  <main>
    <section>
      <div class="container">
        <div class="lesft-side">
          <div class="items">
            <div class="select-image">
            </div>
            <div class="thumbs">

              <div class="thumb">
                <img src="../imagens produtos/Detalhes.png" alt="">
              </div>

              <div class="thumb">
                <img src="../imagens produtos/Detalhes.png" alt="">
              </div>

              <div class="thumb">
                <img src="../imagens produtos/Detalhes.png" alt="">
              </div>

              <div class="thumb">
                <img src="../imagens produtos/Detalhes.png" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="right-side">
          <div class="content">
            <h6>STYLET COMPANY</h6>
          </div>
          <div class="options">
            <a id="button" onclick="checkLoginStatus('addCartItem')"><span class="material-symbols-outlined"
                class="hovers">add_shopping_cart</span>Add cart</a>
            <a id="button2" onclick="checkLoginStatus('buyNow')"><span
                class="material-symbols-outlined">add_shopping_cart</span>Comprar Agora</a>
          </div>
          <!-- Mensagens de sucesso -->
          <div id="success-message" class="alert alert-success" role="alert" style="display: none;"></div>
        </div>
      </div>
    </section>
  </main>
  <!--footer-->
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
</body>
<!--script menu burguer-->
<script src="../script.js/menuburguer.js"></script>
<script src="../script.js/recuperacaodedados.js"></script>
<script>
  function checkLoginStatus(action) {
    var isLoggedIn = <?php echo isset($_SESSION['nome']) ? 'true' : 'false'; ?>;
    if (isLoggedIn) {
      if (action === 'addCartItem') {
        addCartItem();
      } else if (action === 'buyNow') {
        buyNow();
      }
    } else {
      alert('Você precisa estar logado para realizar esta ação.');
      window.location.href = '../paginas/login.php';
    }
  }
</script>

</html>