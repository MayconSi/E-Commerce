<?php
require_once '../conexao/conexao.php';

if (isset($_POST['email']) && isset($_POST['senha'])) { 
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuários WHERE email = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();
            if (password_verify($senha, $usuario['senha'])) {
                session_start();
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("location: ../paginas/index.php");
                exit;
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos.";
            }
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos.";
        }

        $stmt->close();
    } else {
        echo "Erro ao preparar a query: " . $mysqli->error;
    }
}
$mysqli->close();

