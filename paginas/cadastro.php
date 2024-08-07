<?php
require_once "../conexao/conexao.php";
$message = "Cadastre-se";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
       

        $sql = "INSERT INTO usuários (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha);

        if ($stmt->execute()) {
            $message = "Usuário criado com sucesso.";
        } else {
            $message = "Erro ao criar usuário: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $message = "Por favor, preencha todos os campos obrigatórios.";
    }

    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="../icon/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça seu cadastro<br>E saia com estilo</h1>
            <img src="shopping-animate.svg" class="left-login-image" alt="animação login">
        </div>
        <!--formulario-->
        <form id="cadastroForm" method="post" action="">
            <?php if ($message): ?>
                <div class="alert alert-info"><?php echo $message; ?></div>
            <?php endif; ?>
            <div class="form-group">
                <label for="inputEmail4" class="text-white">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                <span id="emailError" class="error"></span>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome" class="text-white">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
                    <div id="nomeErro" class="invalid-feedback" style="display: none;">
                        Por favor, insira um nome válido (máximo de 10 caracteres).
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password" class="text-white">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Senha" required name="senha">
                </div>

                <div class="form-group col-md-6">
                    <label for="confirmPassword" class="text-white">Confirme sua Senha</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme sua senha"
                        required name="confirmSenha">
                    <div id="passwordError" class="error"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastre-se</button>
            <a href="../paginas/login.php" class="btn btn-primary">Voltar</a>
        </form>
    </div>
   <script src="../script.js/validacao.js"></script>
</body>
</html>
