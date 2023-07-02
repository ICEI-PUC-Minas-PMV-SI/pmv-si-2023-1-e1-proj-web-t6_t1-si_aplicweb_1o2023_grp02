<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '123456');
define('DB', 'ong');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

$consulta = "SELECT * FROM animal,dadosong WHERE ong_id = 1";
$consultaextra = "SELECT * FROM animal WHERE id = 1";
$consulta2 = "SELECT * FROM animal WHERE id= 2 ";
$consulta3 = "SELECT * FROM animal WHERE id= 3 ";
$consulta4 = "SELECT * FROM animal WHERE id= 4 ";
$consutaong = "SELECT * FROM dadosong WHERE id =1";
$consutaong2 = "SELECT * FROM dadosong WHERE id =1";
$consutaong3 = "SELECT * FROM dadosong WHERE id =2";
$con = $conexao->query($consulta) or die($conexao->error);

$consultaextra = $conexao->query($consultaextra) or die($conexao->error);

$con2 = $conexao->query($consulta2) or die($conexao ->error);

$con3 = $conexao->query($consulta3) or die($conexao->error);

$con4 = $conexao->query($consulta4) or die($conexao->error);

$conong = $conexao ->query($consutaong) or die($conexao->error);
$conong2 = $conexao ->query($consutaong2) or die($conexao->error);
$conong3 = $conexao ->query($consutaong3) or die($conexao->error);