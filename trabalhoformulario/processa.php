<?php
session_start(); // Inicia a sessão para armazenar os dados temporariamente

// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados enviados pelo formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $telefone = htmlspecialchars($_POST['telefone']);

    // Armazenar os dados na sessão para usá-los em outra página
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['telefone'] = $telefone;

    // Redireciona para a página de exibição dos dados
    header("Location: dados_cadastro.php");
    exit();
} else {
    echo "Erro ao enviar os dados.";
}
?>
