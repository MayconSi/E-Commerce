<?php
include('../conexao/sessoes.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleT</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="shortcut icon" href="../icon/logo.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" id="fixado" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="../paginas/index.php" class="navbar-brand"><img src="../logo/logo.png" width="120" height="125"
                    alt="125" class="logo"></a>
            <form class="d-flex" role="search">
                <div class="barra">
                    <input class="form-control me-2" type="search" placeholder="O que você procura?"
                        aria-label="Search">
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
                    <a href=""><span class="material-symbols-outlined" id="pe">person</span></a>
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
    <section id="seus-dados">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2>Seus Dados</h2>
              <div class="profile-picture">
                <img src="../redes-socias/a5a638d4c65223b8717d490f5d9d4be2.jpg" alt="Sua Foto de Perfil">
              </div>
              <ul class="list-group">
                <li class="list-group-item"><i class="material-icons">person</i> <strong>Nome:</strong>Samanta</li>
                <li class="list-group-item"><i class="material-icons">wc</i> <strong>Sexo:</strong> Feminino</li>
                <li class="list-group-item"><i class="material-icons">favorite</i> <strong>Preferências:</strong> Nike, Adidas</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h3>Dados de Contato</h3>
              <ul class="list-group">
                <li class="list-group-item"><i class="material-icons">email</i> <strong>E-mail:</strong> Samanta@example.com</li>
                <li class="list-group-item"><i class="material-icons">phone</i> <strong>Telefone:</strong> (99) 99999-9999</li>
                <li class="list-group-item"><i class="material-icons">public</i> <strong>Redes Sociais:</strong> <a href="#"><img src="../redes-socias/instagram (2).png" id="redes-socias" alt=""></a> <a href="#"><img src="../redes-socias/facebook.png" id="redes-socias" alt=""></a> <a href="#"><img src="../redes-socias/twitter.png" id="redes-socias" alt=""></a></li>
              </ul>
              <h3>Endereços</h3>
              <ul class="list-group">
                <li class="list-group-item"><i class="material-icons">home</i> <strong>Endereço de Entrega:</strong><br> 123 Rua Principal, Cidade, Estado, CEP: 12345-678 <a href="#">Editar</a></li>
                <li class="list-group-item"><i class="material-icons">home</i> <strong>Endereço de Cobrança:</strong><br> 456 Rua Secundária, Cidade, Estado, CEP: 98765-432 <a href="#">Editar</a></li>
              </ul>
              <a href="#" class="btn btn-edit-profile"><i class="material-icons">edit</i> Editar Perfil</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3>Histórico de Compras</h3>
            </div>
            <div class="col-md-6">
              <h3>Configurações da Conta</h3>
            </div>
          </div>
        </div>
      </section>
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
                        Descubra a paixão por tênis na nossa loja online. Oferecemos uma ampla seleção dos últimos
                        lançamentos e
                        clássicos atemporais, garantindo que você encontre o par perfeito para o seu estilo. Sinta-se
                        confiante e
                        confortável em cada passo com os nossos tênis de alta qualidade.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contato:</h5>

                    <p>
                        Queremos ouvir de você! Se tiver alguma dúvida sobre nossos produtos, pedidos ou qualquer outra
                        coisa, não
                        hesite em nos contatar. Nossa equipe de suporte está pronta para ajudar. Entre em contato
                        conosco através do
                        e-mail: <a href="">supportStylet@gmail.com</a> ou ligue para o número: <a href="">+71
                            98528-6557.</a>
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
<!-- Bootstrap JS e dependências -->
<script src="../script.js/carrinho.js"></script>
<script src="../script.js/paginadinamica.js"></script>
<script src="../script.js/recuperacaodedados.js"></script>
<script src="../script.js/menuburguer.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>