
<?php

// Protege a página: só usuários logados podem cadastrar produtos
include("verificar_sessao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Brinquedo - Toy Mania</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Cadastrar Brinquedo</h1>

        <p class="subtitulo">Preencha os dados do novo brinquedo</p>

        <!-- Formulário envia os dados para salvar_brinquedo.php -->
        <form action="salvar_brinquedo.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome"
                    placeholder="Digite o nome do brinquedo" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>

                <select name="categoria" id="categoria" required>

                    <option value="">Selecione uma categoria</option>

                    <option value="Bonecas">Bonecas</option>

                    <option value="Carrinhos">Carrinhos</option>

                    <option value="Jogos de tabuleiro">Jogos de tabuleiro</option>

                    <option value="Pelúcias">Pelúcias</option>

                    <option value="Brinquedos educativos">Brinquedos educativos</option>

                    <option value="Brinquedos de montar">Brinquedos de montar</option>

                    <option value="Action figures">Action figures</option>

                    <option value="Brinquedos musicais">Brinquedos musicais</option>

                </select>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="decimal" id="preco" name="preco"
                    placeholder="Digite o preço do brinquedo" required>
            </div>

            <button type="submit" class="btn btn-block btn-sucesso">
                Salvar Brinquedo
            </button>

        </form>

        <!-- Botão de voltar para o painel -->
        <a href="painel_funcionario.php" class="btn btn-voltar">
            Voltar para o painel
        </a>

    </div>

</body>

</html>