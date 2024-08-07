<?php
include ('../conexao/sessoes.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleT</title>
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="shortcut icon" href="../icon/logo.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
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
                        if (isset($_SESSION['nome'])) {
                            echo $_SESSION['nome'];
                        }
                        ?>
                    </span>
                    <a href="../paginas/perfil.php"><span class="material-symbols-outlined" id="pe">person</span></a>
                    <a href="../paginas/carrinho.php">
                        <span class="material-symbols-outlined" id="cart">shopping_cart_checkout</span>
                        <span class="cart-count">0</span>
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
    <!--carrinho shop-->
    <div class="container mt-4">
        <h1 class="mb-4">Carrinho de Compras</h1>
        <div class="row">
            <div class="col-md-8">
                <!-- Lista de produtos -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Produtos</h4>
                    </div>
                    <div class="card-body product-cart-container">
                        <!-- Produto 1 -->
                        <!-- <div class="row mb-3">
                            <div class="col-md-3">
                                <img src="../img carrinho/tenis nike cart.png" alt="Produto" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h5>Nome do Produto</h5>
                                <p>Descrição breve do produto.</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <p>Preço: R$ 50,00</p>
                                <button class="btn btn-danger btn-sm">Remover</button>
                            </div>
                        </div> -->
                        <!-- Repetição de produtos -->
                    </div>
                </div>
                <!-- Total -->
                <div class="card">
                    <div class="card-body text-right">
                        <button class="btn btn-primary" onclick="fecharCarrinho()">Finalizar Compra</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Resumo do pedido -->
                <div class="card">
                    <div class="card-header">
                        <h4>Resumo do Pedido</h4>
                    </div>
                    <div class="card-body">
                        <div class="pre-quant">
                        </div>
                        <button class="btn btn-success btn-block" onclick="limparCarrinho()">Limpar carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
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
<script src="../script.js/carrinho.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="../script.js/menuburguer.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function limparCarrinho() {
        // Ver se o usuario esta logado antes de limpar o cart
        <?php if (isset($_SESSION['nome'])) { ?>
            sessionStorage.removeItem('cart');
            loadProducts();
            updateCartCount();
        <?php } else { ?>
            alert("Você precisa estar logado para limpar o carrinho.");
        <?php } ?>
    }
</script>
<script>
function fecharCarrinho() {
  // Ver se esta logado para finalizar a compra
  <?php if (isset($_SESSION['nome'])) { ?>
    sessionStorage.removeItem('cart');
    alert("Compra finalizada com sucesso");
    loadProducts();
    updateCartCount();
    window.location.replace("index.php");
  <?php } else { ?>
    alert("Você precisa estar logado para finalizar a compra.");
  <?php } ?>
}
</script>
</html>