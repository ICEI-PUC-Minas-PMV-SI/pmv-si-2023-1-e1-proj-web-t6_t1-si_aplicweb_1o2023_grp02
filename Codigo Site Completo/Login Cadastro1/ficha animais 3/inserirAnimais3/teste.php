<?php 
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php while($dado = $con->fetch_array()) { ?> 
        <h1>
          <p><?php echo $dado['nomeAnimal']; ?></p>
          <p><?php echo $dado['descricaoAnimal']; ?></p>
          <p><img src="<?php echo $dado['foto']; ?>" alt=""></p>
          </h1>
          <?php } ?> 
</body>
</html>