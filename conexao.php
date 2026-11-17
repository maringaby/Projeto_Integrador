<?php
 
$conexao = mysqli_connect(
    "localhost",
    "root",
    "root",
    "loja_de_brinquedo"
);
 
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}