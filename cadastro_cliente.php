<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente - Toy Mania</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro do Cliente</h1>
        <p class="subtitulo">Crie sua conta para acessar o sistema da Toy Mania.</p>
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
            echo '<div class="mensagem-erro">Este email já está cadastrado.</div>';
        }
        ?>

        <form action="salvar_cliente.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">Número do CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu cpf" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-block">Cadastro</button>
        </form>
        <div class="nav-links">
            <p>Já tem conta? <a href="login_cliente.php">Fazer Login</a></p>
        </div>
        <div class="botoes-navegacao">
            <a href="login_cliente.php" class="btn btn-voltar">Voltar para o login</a>
            <a href="cadastro_funcionario.php" class="btn btn-funcionario">Cadastro de Funcionário</a>
        </div>
        <div class="dica-navegacao">
            <strong>Fluxo:</strong> Cadastro → Login → Nossos produtos
        </div>
    </div>

</body>

</html>