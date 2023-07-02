<?php 

include('../conexao.php');


$delete = "DELETE from animal where id= 7 and ong_id = 2;";

$remove = $conexao->query($delete) or die($conexao->error);

$conexao->close();

header('Location: ../ficha animais.php');
exit;

?>