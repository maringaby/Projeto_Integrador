<?php
 
//Excluir_brinquedo.php
// Remove um produto do banco de dados pelo ID
// Conceitos: $_GET, MySQL, DELETE (D do CRUD)
 
// Protege a página: só usuários podem excluir produtos
include("verificar_sessao.php");
 
// Inclui a conexão com o banco de dados.
include("conexao.php");
 
// Recebe o ID do livro pela URL (ex: excluir_brinquedos.php?id=3)
$id = $_GET['id'];
 
// Monta o comando SQL DELETE para remover o livro
$sql = "DELETE FROM  produtos WHERE id = $id";
 
// Executa o DELETE mp banco de dados
mysqli_query($conexao, $sql);
 
// REdireciona para a listagem de produtos após a exclusão.
header("Location: listar_brinquedo.php");
exit();