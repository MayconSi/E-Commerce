<?php
include('../conexao/conexao.php');
if(isset($_POST['email']) && isset($_POST['senha'])) { // Verifica se ambos os campos foram preenchidos

    if(strlen($_POST['email']) == 0){
        $mensagemErro = "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        $mensagemErro = "Preencha sua senha";
    } else {
    
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuários WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("falha na execução do código SQL:" . $mysqli->error);
        
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario ['id'];
            $_SESSION['nome'] = $usuario ['nome'];

            header("location:index.php");
            
        } else {
            $mensagemErro = "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleT</title>
    <link rel="shortcut icon" href="../icon/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
    <style>
    .mensagemErro {
            background-color: white;
            border: 1px solid black;
            padding: 10px;
            width: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            display: <?php echo isset($mensagemErro) ? 'block' : 'none'; ?>; /* Mostra a mensagem de erro apenas se houver uma mensagem */
        }

        .mensagemErro p {
            margin: 0;
        }

        .mensagemErro button {
            background-color: blue;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .mensagemErro button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
<form action="login.php" method="POST">
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login <br>E saia com estilo</h1>
            <img src="shopping-animate.svg" class="left-login-image" alt="animação login">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email"> <!-- Adicionado o atributo name -->
                </div>
                <div class="textfield">
                    <label for="usuario">Senha</label>
                    <input type="password" name="senha" placeholder="Senha"> <!-- Adicionado o atributo name -->
                    <p>Não tem uma conta? <a href="../paginas/cadastro.php">Cadastre-se</a></p>
                </div>
                <button class="btn-login">Login</button>
                <p class="p2">Ou entre sem uma conta <a href="../paginas/index.php" class="text-a">aqui</a></p>
            </div>
        </div>
    </div>
</form>
<div class="mensagemErro">
    <p><?php echo isset($mensagemErro) ? $mensagemErro : ''; ?></p>
    <button onclick="fecharMensagem()">OK</button>
</div>
<script>
    function fecharMensagem() {
        var mensagemErro = document.querySelector('.mensagemErro');
        mensagemErro.style.display = 'none';
    }
</script>
</body>
</html>