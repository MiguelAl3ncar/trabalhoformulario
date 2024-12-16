<?php
session_start(); // Inicia a sessão para acessar os dados armazenados
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cadastro</title>
    <link rel="stylesheet" href="style.css"> <!-- Certifique-se de que o CSS é corretamente vinculado -->
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>Sistema de Cadastro</h1>
    </header>

    <!-- Navegação -->
    <nav>
        <a href="index.html">Início</a>
        <a href="dados_cadastro.php">Dados do Cadastro</a> <!-- Link correto -->
        <a href="desenvolvedores.html">Desenvolvedores</a>
    </nav>

    <!-- Conteúdo principal da página -->
    <main>
        <h2>Dados do Cadastro</h2>

        <?php
        // Verificar se os dados estão armazenados na sessão
        if (isset($_SESSION['nome']) && isset($_SESSION['email']) && isset($_SESSION['telefone'])) {
            // Exibir os dados do usuário
            echo "<p><strong>Nome:</strong> " . $_SESSION['nome'] . "</p>";
            echo "<p><strong>Email:</strong> " . $_SESSION['email'] . "</p>";
            echo "<p><strong>Telefone:</strong> " . $_SESSION['telefone'] . "</p>";
            echo "<p><strong>Senha:</strong> " . $_SESSION['senha'] . "</p>"; // Apenas para demonstração. Nunca exiba senhas em produção.
        } else {
            echo "<p>Dados não encontrados.</p>";
        }
        ?>
    </main>

    <!-- Rodapé -->
    <footer>
        <ul>
            <li>IFRN Campus Santa Cruz</li>
            <li>Trabalho de Autoria Web</li>
            <li>Prof. Marcelo Figueiredo Barbosa Júnior</li>
            <li>Nomes dos componentes do grupo</li>
        </ul>
    </footer>
</body>
</html>
