<?php 

include('../conexao.php');


$delete = "DELETE from animal where id= 12 and ong_id = 3;";

$remove = $conexao->query($delete) or die($conexao->error);

$conexao->close();

header('Location: ../ficha animais.php');
exit;

?>