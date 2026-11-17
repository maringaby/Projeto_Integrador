<?php
 
// lista_livro.php
// Exibe todos os livros cadastrados em uma tabela.
// Conceitos: MySQL, SELECT (READ DO CRUD), loop While.
 
// Protege a página: só usuários logados podem listar livros.
include("verificar_sessao.php");
 
// Inclui a conexão o banco de dados.
include("conexao.php");
 
// Consulta SQL que busca todos os produtos da tabela.
$sql = "SELECT * FROM produtos";
 
// Executa a consulta e gaurda o resultado
$resultado = mysqli_query($conexao, $sql);
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos - Toy Mania</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <!-- Container mais largo para acomodar a tabela -->
    <div class="container container-largo">
        <h1>Listagem de Produtos</h1>
        <p class="subtitulo">
            Todos os produtos cadastrados no sistema.
        </p>
        <!-- Tabela estilizada com os dados dos livros -->
        <table class="tabela-brinquedo">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
            </tr>
            <?php
            // Loop While percorre cada linha retornada pela consulta SQL.
            while ($produtos = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $produtos['id']; ?></td>
                    <td><?php echo $produtos['nome']; ?></td>
                    <td><?php echo $produtos['categoria']; ?></td>
                    <td><?php echo $produtos['preco']; ?></td>
                    <td class="acoes">
                        <!-- Link para editar o brinquedo -->
                        <!-- Envia o ID pela URL com ?id= -->
                        <a href="editar_brinquedo.php?id=<?php echo $produtos['id']; ?>" class="link-editar">
                            Editar
                        </a>
 
                        <!-- Link para excluir com confirmação do JS -->
                        <a href="excluir_brinquedo.php?id= <?php echo $produtos['id']; ?>" class="link-excluir"
                            onclick="return confirm('Tem certeza que deseja excluir o brinquedo?')">
                            Excluir
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <!-- Botão de voltar para painel principal -->
        <a href="painel_funcionario.php" class="btn btn-voltar">
            Voltar para o Painel
        </a>
    </div>
</body>
 
</html>