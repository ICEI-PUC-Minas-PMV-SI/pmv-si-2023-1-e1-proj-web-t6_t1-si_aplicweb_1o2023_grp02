<?php 
include('conexao.php');

?>
<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<javascript>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script>

        </script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script></script>

        <title>Ficha animais</title>
        <link rel="stylesheet" href="styleBaixo.css">
        <style>
            body {
                background-color: f2f7fa;
            }
        </style>
    </head>


    <header>
<a href="../../SiteCachorro/index.html"><img id="pata" src="pata.png" width="40px" vertical-align="left"></a>




    </header>

    <body>

        <h2>PetLove</h2>



    <div class="pontas"> </div>

    <div class="pontas"> 

<div>
    <h3>Animais cadastrados pela ong</h3>
    <hr size="1">
    <div class="animais" click id="link1">
        
    <h1> <button type="button"><a href="inserirAnimais/animais.php">insira aqui seu animal</a></button> <button type="button"><a href="remover/remove.php">remover animal</a></button></h1>
    <?php while($dado = $con->fetch_array()) { ?> 
        <img id="miniatura" src="<?php echo $dado['foto'] ?>" alt="" width="50%">
        <p>
        <h4><?php echo $dado['nomeAnimal'] ?></h4> 
        <?php echo $dado ['descricaoAnimal'] ?>
        </p>
       <?php } ?>
    </div>
    <hr size="1">
    <div class="animais" click id="link2"><h1> <button type="button"><a href="inserirAnimais2/animais.php">insira aqui seu animal</a></button> <button type="button"><a href="remover/remove2.php">remover animal</a></button></h1>
    <?php while($dado2 = $con2->fetch_array()) { ?> 
        <img id="miniatura" src="<?php echo $dado2['foto'] ?>" alt="" width="50%">
        <p>
        <h4><?php echo $dado2['nomeAnimal'] ?></h4> 
        <?php echo $dado2 ['descricaoAnimal'] ?>
        </p>
       <?php } ?>
    </div>
    </div>
    <hr size="1">
    <div class="animais" click id="link3"><h1> <button type="button"><a href="inserirAnimais3/animais.php">insira aqui seu animal</a></button> <button type="button"><a href="remover/remove3.php">remover animal</a></button></h1>
    <?php while($dado2 = $con3->fetch_array()) { ?> 
        <img id="miniatura" src="<?php echo $dado2['foto'] ?>" alt="" width="50%">
        <p>
        <h4><?php echo $dado2['nomeAnimal'] ?></h4> 
        <?php echo $dado2 ['descricaoAnimal'] ?>
        </p>
       <?php } ?>
    </div>
    <hr size="1">
    <div class="animais" click id="link4"><h1> <button type="button"><a href="inserirAnimais4/animais.php">insira aqui seu animal</a></button> <button type="button"><a href="remover/remove4.php">remover animal</a></button></h1>
    <?php while($dado2 = $con2->fetch_array()) { ?> 
        <img id="miniatura" src="<?php echo $dado2['foto'] ?>" alt="" width="50%">
        <p>
        <h4><?php echo $dado2['nomeAnimal'] ?></h4> 
        <?php echo $dado2 ['descricaoAnimal'] ?>
        </p>
       <?php } ?>
    </div>
    <div class="animais" click id="link5">

        <hr size="1"><h1> <button type="button"><a href="inserirAnimais5/animais.php">insira aqui seu animal</a></button> <button type="button"><a href="remover/remove5.php">remover animal</a></button></h1>
        <?php while($dado2 = $con2->fetch_array()) { ?> 
        <img id="miniatura" src="<?php echo $dado2['foto'] ?>" alt="" width="50%">
        <p>
        <h4><?php echo $dado2['nomeAnimal'] ?></h4> 
        <?php echo $dado2 ['descricaoAnimal'] ?>
        </p>
       <?php } ?>
    </div>


</div>

    </div>
    
    <div class="pontas"> </div>

</body>

<footer>

    <div class="rodape">

        &copy;Projeto Grupo 2

    </div>
</footer>
