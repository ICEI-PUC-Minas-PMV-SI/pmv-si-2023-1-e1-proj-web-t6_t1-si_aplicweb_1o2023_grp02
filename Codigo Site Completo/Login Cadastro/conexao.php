<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '123456');
define('DB', 'ong');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');