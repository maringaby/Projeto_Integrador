<?php
 
// Inclui a verificação de sessão (protege a página de acesso não
// autorizado)
include("verificar_sessao.php");
 
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Toy Mania</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <div class="container">
        <!-- Exibe o nome do usuário logado (vem da sessão $_SESSION) -->
        <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
        <p class="subtitulo">Bem-vindo ao painel da
            Toy Mania. Escolha uma opção:</p>
        <!-- Cards grandes para facilitar a navegação -->
        <div class="painel-cards">
            <a href="cadastrar_brinquedo.php" class="card-link">
                Cadastrar Brinquedo
            </a>
            <a href="listar_brinquedo.php" class="card-link">
                Listar Brinquedo
            </a>
            <a href="logout_funcionario.php" class="card-link">
                Sair
            </a>
        </div>
        <div class="dica-navegacao">
            <strong>Fluxo:</strong>
            Painel → Cadastrar Livro ou Listar Livros → Editar / Excluir
        </div>
    </div>
 
</body>
 
</html>