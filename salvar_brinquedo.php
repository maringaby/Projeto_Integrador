<?php
// salvar_livro. php
// Recebe os dados do formulário e insere um novo livro no banco
// Conceito: POST, MySQL, INSERT< (CREATE DO CRUD)
 
// pROTEGE A PÁGINA: SÓ USUÁRIOS LOGADOS PODEM SALVAR LIVROS.
include("verificar_sessao.php");
 
// Inclui a conexão com banco de dados (MySQL)
include("conexao.php");
 
// REcebe os dados enviados pelo formulário via POST
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
 
// Monta o comando SQL INSERT para cadastrar o livro:
$sql = "INSERT INTO produtos (nome, categoria, preco)
VALUES ('$nome', '$categoria', '$preco')";
 
// Executa o INSERT no banco de dados
mysqli_query($conexao, $sql);
 
// Redireciona para listagem de livros após salvar
header("Location: listar_brinquedo.php");
exit();