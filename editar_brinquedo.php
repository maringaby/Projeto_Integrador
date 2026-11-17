<?php

// editar_brinquedo.php
// Exibe o formulário preenchido com os dados do livro para editar
// Conceitos: $_GET, MySQL, SELECT, Formulário de edição.

// Protege a página: só usuários logados pode, editar livros
include("verificar_sessao.php");

// Inclui a conexão com o banco de dados.
include("conexao.php");

// Recebe o ID do produtos pela URL (ex: editar_brinquedo.php?id=3)
$id = $_GET['id'];

// Consulta SQL que busca o produtos pelo ID.
$sql = "SELECT * FROM produtos WHERE id = $id";

// Executa a consulta
$resultado = mysqli_query($conexao, $sql);

// Transforma o resultado em array associativo
$produtos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos - Toy Mania</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Editar Produtos</h1>
        <p class="subtitulo">Altere os dados do brinquedo e clique em Atualizar</p>

        <!-- Formulário envia os dados para atualizar_livro.php -->
        <form action="atualizar_brinquedo.php" method="POST">
            <!-- Campo hidden guarda o ID sem aparecer na tela -->
            <input type="hidden" name="id" value="<?php echo $produtos['id']; ?>">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?php echo $produtos['nome']; ?>" required>

            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>

                <select name="categoria" id="categoria" required>
                    <option value="">Selecione uma categoria</option>

                    <option value="Bonecas" <?php if ($produtos['categoria'] == 'Bonecas')
                        echo 'selected'; ?>>
                        Bonecas
                    </option>

                    <option value="Carrinhos" <?php if ($produtos['categoria'] == 'Carrinhos')
                        echo 'selected'; ?>>
                        Carrinhos
                    </option>

                    <option value="Jogos de tabuleiro" <?php if ($produtos['categoria'] == 'Jogos de tabuleiro')
                        echo 'selected'; ?>>
                        Jogos de tabuleiro
                    </option>

                    <option value="Pelúcias" <?php if ($produtos['categoria'] == 'Pelúcias')
                        echo 'selected'; ?>>
                        Pelúcias
                    </option>

                    <option value="Brinquedos educativos" <?php if ($produtos['categoria'] == 'Brinquedos educativos')
                        echo 'selected'; ?>>
                        Brinquedos educativos
                    </option>

                    <option value="Brinquedos de montar" <?php if ($produtos['categoria'] == 'Brinquedos de montar')
                        echo 'selected'; ?>>
                        Brinquedos de montar
                    </option>

                    <option value="Action figures" <?php if ($produtos['categoria'] == 'Action figures')
                        echo 'selected'; ?>>
                        Action figures
                    </option>

                    <option value="Brinquedos musicais" <?php if ($produtos['categoria'] == 'Brinquedos musicais')
                        echo 'selected'; ?>>
                        Brinquedos musicais
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="decimal" id="preco" name="preco" value="<?php echo $produtos['preco']; ?>" required>
            </div>


            <button type="submit" class="btn btn-block">Atualizar Produtos</button>
        </form>
        <a href="listar_brinquedo.php" class="btn btn-voltar">Voltar para listagem</a>
    </div>
</body>

</html>