<?php
include ('../conexao/sessoes.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleT</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="shortcut icon" href="../icon/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/sobre nos.css">
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
    <div class="container mt-5">
        <h1 class="text-center mb-4">Sobre Nós</h1>
        <p>A Loja de Tênis é uma loja virtual especializada em calçados esportivos. Fundada em 2020, nosso objetivo é
            fornecer aos nossos clientes uma ampla seleção dos melhores tênis do mercado a preços acessíveis.</p>
        <p>Nossos produtos são cuidadosamente selecionados para garantir qualidade, conforto e estilo. Trabalhamos com
            marcas renomadas e estamos sempre atualizados com as últimas tendências da moda esportiva.</p>
        <p>Além disso, estamos empenhados em oferecer um excelente atendimento ao cliente. Nossa equipe está sempre
            disponível para ajudar e responder a quaisquer dúvidas ou preocupações que você possa ter.</p>
        <p>Na Loja de Tênis, acreditamos que os sapatos certos podem fazer toda a diferença em sua jornada de fitness.
            Estamos aqui para ajudá-lo a encontrar o par perfeito que o ajude a alcançar seus objetivos.</p>

        <!-- Imagens -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <img src="../img sobre nois/girl-2385378_1280.jpg" class="img-fluid" alt="Imagem 1">
            </div>
            <div class="col-md-4 mb-3">
                <img src="../img sobre nois/jogging-2343558_1280.jpg" class="img-fluid" alt="Imagem 2">
            </div>
            <div class="col-md-4 mb-3">
                <img src="../img sobre nois/shoes-434918_1280.jpg" class="img-fluid" alt="Imagem 3">
            </div>
        </div>
    </div>
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
    <!--menu burguer-->
    <script src="../script.js/menuburguer.js"></script>
</body>

</html>