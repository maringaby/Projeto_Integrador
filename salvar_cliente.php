<?php
// salvar_usuario.php
// Recebe os dados do formulário de cadastro e salva o usuário
// no banco
// Conceitos: POST, password_hash, MySQL, INSERT, verificação
// de E-mail duplicado.
 
// Inclui o arquivo de conexão com o banco de dados.
include('conexao.php');
 
// Recebe os dados enviados pelo formulário via método POST.
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

 
// =========================================================
// VERIFICAÇÃO DE E-MAIL DUPLICADO
// Antes de se cadastrar, verifique se o email já existe no banco
// =========================================================
 
// Monta uma consulta SQL (SELECT) para buscar o email
$sqlVerificar = "SELECT id FROM cliente WHERE email = '$email'";
 
//Executa uma consulta no MySQL
$resultadoVerificar = mysqli_query($conexao, $sqlVerificar);
 
// Validação: mysqli_num_rows() conta quantos registros
// foram encontrados
if (mysqli_num_rows($resultadoVerificar) > 0) {
    // Se o e-mail já existe, redireciona de volta ao cadastro
    // com mensagem de erro
    header("Location: cadastro_cliente.php?erro=email");
    exit();
}
 
// ===============================================
// CRIPTOGRAFIA DA SENHA
// Nunca armazenamos a senha em texto puro no banco
// ===============================================
// password_hash() gera um hash seguro da senha
// PASSWORD_DEFAULT usa um algoritmo bcrypt (padrão PHP)
 
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
 
// ===============================================
// INSERÇÃO NO BANCO (CREATE DO CRUD)
// ===============================================
 
$sql = "INSERT INTO cliente (nome, cpf, email, senha) VALUES
('$nome', '$cpf', '$email', '$senhaCriptografada')";
 
//Executa o INSERT no banco de dados
mysqli_query($conexao, $sql);
 
// Redireciona o usuário para a página de login após um cadastro
// bem-sucedido
header("Location: login_cliente.php");
exit();