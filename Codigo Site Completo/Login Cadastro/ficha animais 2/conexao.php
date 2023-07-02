<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '123456');
define('DB', 'ong');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


$consulta = "SELECT * FROM animal where id = 6 and ong_id= 2 ";
$con = $conexao->query($consulta) or die($conexao->error);


$consulta2 = "SELECT * FROM animal where id = 7 and ong_id= 2 ";
$con2 = $conexao->query($consulta2) or die($conexao->error);


$consulta3 = "SELECT * FROM animal where id = 8 and ong_id= 2 ";
$con3 = $conexao->query($consulta3) or die($conexao->error);


$consulta4 = "SELECT * FROM animal where id = 9 and ong_id= 2 ";
$con4 = $conexao->query($consulta4) or die($conexao->error);


$consulta5 = "SELECT * FROM animal where id = 10 and ong_id= 2 ";
$con5 = $conexao->query($consulta5) or die($conexao->error);