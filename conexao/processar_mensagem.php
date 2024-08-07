<?php
include ('../conexao/conexao.php'); // inclua o arquivo de conexão com o banco de dados
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Prepara e executa a consulta SQL para inserir a mensagem no banco de dados
    $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $mensagem);
    $stmt->execute();

    // Verifica se a mensagem foi inserida com sucesso
    if ($stmt->affected_rows > 0) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $mysqli->close();
}
?>
