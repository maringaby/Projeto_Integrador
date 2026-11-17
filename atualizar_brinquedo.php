<?php
 
// atulizar_brinquedo.php
// Recebe os dados do formulário de edição e atualiza o brinquedo
// Conceitos: POST, MySQL, UPDATE (U DO CRUD)
 
// Protege a página: só usuários logados podem atualizar os livros
include("verificar_sessao.php");
 
// Inclui conexão com o banco de dados
include("conexao.php");
 
// Recebe os dados enviados pelo formulário de edição.
$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
 
// Monta o comando SQL UPDATE para alterar os dados do brinquedo
$sql = "UPDATE produtos SET nome = '$nome', categoria = '$categoria', preco = '$preco' WHERE id = $id";
 
// Executa o UPDATE no banco de dados
mysqli_query($conexao, $sql);
 
// Redireciona para a listagem após atualizar
header("Location: listar_brinquedo.php");
exit();