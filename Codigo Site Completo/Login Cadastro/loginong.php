<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: login Ong.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from dadosong where email = '{$email}' and senha = md5('{$senha}') and id = 1";
$query2 = "select * from dadosong where email = '{$email}' and senha = md5('{$senha}') and id = 2";
$query3 = "select * from dadosong where email = '{$email}' and senha = md5('{$senha}') and id = 3";
$query4 = "select * from dadosong where email = '{$email}' and senha = md5('{$senha}') and id = 4";
$query5 = "select * from dadosong where email = '{$email}' and senha = md5('{$senha}') and id = 5";
$query6= "select * from dadosong where email = '{$email}' and senha = md5('{$senha}') and id = 6";

$result = mysqli_query($conexao, $query);
$result2 = mysqli_query($conexao,$query2);
$result3 = mysqli_query($conexao,$query3);

$row = mysqli_num_rows($result);
$row2 = mysqli_num_rows($result2);
$row3 = mysqli_num_rows($result3);




if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: ficha animais/ficha animais.php');
	exit();
}elseif ($row2== 1){
	$usuario_bd = mysqli_fetch_assoc($result2);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('location: ficha animais 2/ficha animais.php');
	exit();
}elseif ($row3== 1){
	$usuario_bd = mysqli_fetch_assoc($result3);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('location: ficha animais 2/ficha animais.php');
	exit();
}
 else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login Ong.php');
	exit();
}