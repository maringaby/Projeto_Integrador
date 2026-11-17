<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário - Toy Mania</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <div class="container">
        <h1>Cadastro de Funcionário</h1>
        <p class="subtitulo">Crie sua conta para acessar o sistema da Toy Mania.</p>
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
            echo '<div class="mensagem-erro">Este email já está cadastrado.</div>';
        }
        ?>
 
        <form action="salvar_funcionario.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome"
                    placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                    placeholder="Digite seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="matricula">Número da Matrícula</label>
                <input type="text" id="matricula" name="matricula"
                    placeholder="Digite sua matricula" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha"
                    placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-block">Cadastro</button>
        </form>
        <div class="nav-links">
            <p>Já tem conta? <a href="login_funcionario.php">Fazer Login</a></p>
        </div>
        <a href="login_funcionario.php" class="btn btn-voltar">Voltar para o login</a>
        <div class="dica-navegacao">
            <strong>Fluxo:</strong> Cadastro → Login → Painel → Gerenciar Brinquedos
        </div>
    </div>
 
</body>
 
</html>