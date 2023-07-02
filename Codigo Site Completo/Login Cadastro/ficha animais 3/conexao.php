<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '123456');
define('DB', 'ong');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


$consulta = "SELECT * FROM animal where id = 1 and ong_id= 1 ";
$con = $conexao->query($consulta) or die($conexao->error);


$consulta2 = "SELECT * FROM animal where id = 2 and ong_id= 1 ";
$con2 = $conexao->query($consulta2) or die($conexao->error);


$consulta3 = "SELECT * FROM animal where id = 3 and ong_id= 2 ";
$con3 = $conexao->query($consulta3) or die($conexao->error);


$consulta4 = "SELECT * FROM animal where id = 4 and ong_id= 2 ";
$con4 = $conexao->query($consulta4) or die($conexao->error);


$consulta5 = "SELECT * FROM animal where id = 5 and ong_id= 3 ";
$con5 = $conexao->query($consulta5) or die($conexao->error);