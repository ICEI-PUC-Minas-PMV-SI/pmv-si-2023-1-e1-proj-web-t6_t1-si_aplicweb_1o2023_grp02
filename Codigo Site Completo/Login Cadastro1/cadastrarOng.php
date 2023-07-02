<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from dadosong where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro ong.php');
	exit;
}

$sql = "INSERT INTO dadosong (nome,descricao,telefone,email,endereco,senha) VALUES ('$nome', '$descricao', '$telefone', '$email', '$endereco', '$senha' )";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro ong.php');
exit;
?>