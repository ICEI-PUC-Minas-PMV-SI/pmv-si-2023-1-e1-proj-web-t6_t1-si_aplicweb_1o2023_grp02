<?php 

include('.../conexao.php');


$delete = "DELETE from animal where id= 3 and ong_id = 2;";

$remove = $conexao->query($delete) or die($conexao->error);

$conexao->close();

header('Location: ../ficha animais.php');
exit;

?>