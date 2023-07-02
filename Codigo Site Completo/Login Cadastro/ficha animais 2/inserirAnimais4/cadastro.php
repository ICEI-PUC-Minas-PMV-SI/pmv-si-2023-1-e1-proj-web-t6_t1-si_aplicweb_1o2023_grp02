<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$raca = mysqli_real_escape_string($conexao, trim($_POST['raca']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$idade = mysqli_real_escape_string($conexao, trim($_POST['idade']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
$foto = mysqli_real_escape_string($conexao, trim($_POST['foto']));
$status = mysqli_real_escape_string($conexao, trim($_POST['status']));
$sql = "select count(*) as total from animal where nomeAnimal = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: animais.php');
	exit;
}

$sql = "INSERT INTO animal (id,nomeAnimal,especie,sexo,idade,descricaoAnimal,foto,status,ong_id) VALUES ('5','$nome', '$raca', '$sexo', '$idade', '$descricao', '$foto','$status','2')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../ficha animais.php');
exit;
?>