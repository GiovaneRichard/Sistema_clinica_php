<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "SELECT count(*) as total from usuario WHERE email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: ../model/cadUsuario.html');
	exit();
}

$sql = "INSERT INTO usuario(nome, email, senha, dataCadastro) VALUES($nome, $email, $senha, NOW())";

// Valida se a consulta foi realizada com sucesso
if($conexao->query($sql) === true){
	$_SESSION['status_cadastro'] = true;
}

// encerra a conexão
$conexao->close();

header('Location: ../model/painel.php');
exit();

?>