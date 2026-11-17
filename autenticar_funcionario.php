<?php
// autenticar_funcionario.php verifica se o e-mail e senha informados estão corretos!
// Os conceitos deles são: session_start, SELECT no MySQL, password_verify!
 
// Aqui inicia a sessão do usuário.
// A Sessão permite salvar os dados do usuário logado entre as páginas!
session_start();
 
// Inclui a coenxão com banco de dados.
include("conexao.php");
 
// Recebe o email e a senha digitados no formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];
 
// =======================================================
// CONSULTA NO BANCO (LER do CRUD)
// Busca o funcionario pelo email informado
// =======================================================
 
// Montando uma consulta SQL SELECT
$sql = "SELECT * FROM funcionario WHERE email = '$email'";
 
// Executa a consulta e guarda o resultado.
$resultado = mysqli_query($conexao, $sql);
 
// mysqli_fetch_assoc() transforma a linha do resultado
// em array associativo
$funcionario = mysqli_fetch_assoc($resultado);
 
// =======================================================
// VERIFICAÇÃO DA SENHA
// =======================================================
 
// Verifique se o usuário foi encontrado e se a senha está correta
// password_verify() compara a senha digitada com o hash salvo
// no banco
if ($funcionario && password_verify($senha, $funcionario['senha'])) {
    // Login bem-sucedido: guarda o nome do usuário na sessão
    $_SESSION['nome'] = $funcionario['nome'];
    // Redireciona para o painel principal
    header("Location: painel_funcionario.php");
    exit();
} else {
    // Login inválido: redirecionamento de volta para login
    // com mensagem de erro
    header("Location: login_funcionario.php?erro=login");
    exit();
}