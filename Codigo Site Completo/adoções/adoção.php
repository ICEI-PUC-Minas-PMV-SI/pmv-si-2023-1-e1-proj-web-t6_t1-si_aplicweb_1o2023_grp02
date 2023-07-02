<?php
include("conexao.php");
?>


<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<javascript>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <link rel="stylesheet" href="styleBaixo.css">
        <link rel="stylesheet" href="style.css">
        

    
    
        <script>
            $(document).ready(function () {
                $("#primeiroAnimal").hide();
                $("#segundoAnimal").hide();
                $("#terceiroAnimal").hide();
                $("#primeiroFinal").hide();
                $("#segundoFinal").hide();
                $("#terceiroFinal").hide();
            });
            $(document).ready(function () {
                $("#link1").click(function () {
                    $("#segundoAnimal").hide();
                    $("#terceiroAnimal").hide();
                    $("#segundoFinal").hide();
                    $("#terceiroFinal").hide();

                    $("#primeiroFinal").show();
                    $("#primeiroAnimal").show();
                });
            });
            $(document).ready(function () {
                $("#link2").click(function () {
                    $("#primeiroAnimal").hide();
                    $("#terceiroAnimal").hide();
                    $("#primeiroFinal").hide();
                    $("#terceiroFinal").hide();

                    $("#segundoFinal").show();
                    $("#segundoAnimal").show();

                });
            });
            $(document).ready(function () {
                $("#link3").click(function () {
                    $("#segundoAnimal").hide();
                    $("#primeiroAnimal").hide();
                    $("#segundoFinal").hide();
                    $("#primeiroFinal").hide();

                    $("#terceiroAnimal").show();
                    $("#terceiroFinal").show();

                });
            });
            $(document).ready(function () {
                $("#clickme").click(function () {
                    $("#quadroUm").toggle();
                });

            });
            $(document).ready(function () {
                $("#adotarUm").click(function () {
                    alert("Adoção finalizada! Logo entraremos em contato para retornar sobre o encontro.")
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script></script>

        <title>acompanhamento de adoções </title>

        <style>
            body {
                background-color: f2f7fa;
            }
        </style>


    </head>

<header>
<a href="../SiteCachorro/index.html"><img id="pata" src="pata.png" width="40px" vertical-align="left"></a>
</header>
    

    <body>
    
        <h2>PetLove</h2>


        <div class="modal-container">
            <div class="modal">
                <h6> Parabéns, falta pouco para você se reunir com seu novo colega! </h6>
                
                <span> <?php while($dado = $con->fetch_array()) { ?>
                    <h7><?php echo $dado['nomeAnimal']; ?></h7> já está te esperando em <h7>
                         <?php echo $dado['endereco'];  ?></h7>
                        
                    <br> 
                    <br>
                    <br>
                    Não se esqueça de levar seu documento com cpf e foto para poder realizar a adoção!
                
                </span>
                <hr />
               
                <?php }?>
                <div class="btns">
                    <button class="btnOK" onclick="closeModal()">Realizar adoção</button>
                    <button class="btnClose" onclick="closeModal()">Desistir da adoção</button>
                </div>
            </div>
        </div>
      
        <section><?php while($dadoextra = $consultaextra->fetch_array()) { ?>
            <div class="quadro"></div>
            <div class="quadro" id="quadroUm">
                <h3>Adoções em análise</h3>
                <hr size="1">
                <div class="animais" click id="link1">
                    <img id="miniatura" src="faisca.png" alt="" width="30%">
                    <p>
                    <h4><?php echo $dadoextra['nomeAnimal']; ?></h4>
                    <?php echo $dadoextra['descricaoAnimal']; ?>
                    </p>
                </div>
               <?php }?>

                <div class="animais" click id="link2"><?php while($dado2 = $con2->fetch_array()) { ?>
                    <hr size="1">
                    <img id="miniatura" src="thor.png" alt="" width="30%">
                    <p>
                    <h4><?php echo $dado2['nomeAnimal']?></h4>
                    <?php echo $dado2['descricaoAnimal']?>
                    </p>
                    <?php }?>
                </div>
                <hr size="1">
                <div class="animais" click id="link3"><?php while($dado3 = $con3->fetch_array()) { ?>
                    <img id="miniatura" src="pretinho.png" alt="" width="30%">
                    <p>
                    <h4><?php echo $dado3['nomeAnimal'] ?></h4>
                    <?php echo $dado3['descricaoAnimal'] ?>
                    </p>
                    <?php } ?>
                </div>
            </div>
            <div class="quadro" id="informacoes">
                <h3>Status da adoção</h3>
                <hr size="1">
                <div class="cima" id="inicial">
                    Qual amiguinho você está vendo agora:
                    <br>
                    <br>
                    <?php while($dado = $con->fetch_array()){ ?>
                    <div class="cima" id="primeiroAnimal">
                        <h4><?php echo $dado['nomeAnimal']; ?></h4>
                        <?php echo $dado['status']; ?>
                        <?php } ?>
                    </div>
                    <?php while($dado2 = $con2->fetch_array()){ ?>
                    <div class="cima" id="segundoAnimal">
                        <h4><?php echo $dado2['nome'] ?></h4>
                        <?php echo $dado2['status'] ?>
                        <?php } ?>
                    </div>
                    <?php while($dado3 = $con3->fetch_array()){ ?>
                    <div class="cima" id="terceiroAnimal">
                        <h4><?php echo $dado3['nome'] ?></h4>
                        <?php echo $dado3['status'] ?>
                        <?php } ?>
                    </div>
                </div>
                <hr size="1">
                <div class="baixo" id="final">
                    Onde ele está:
                    <br>
                    <br>
                </div>
                <div class="baixo" id="primeiroFinal">
                    <br>
                   <?php while($dadoong = $conong->fetch_array()){ ?>
                    <?php echo $dadoong['nome']; ?>
                    <br>
                    <?php echo $dadoong['endereco'];  ?>
                    
                    <?php } ?>
                </div>
                <div class="baixo" id="segundoFinal">
                    <br>
                    <?php while($dadoong2 = $conong2->fetch_array()){ ?>
                        <?php echo $dadoong2['nome'];?>
                    <br>
                    <?php echo $dadoong2['endereco'];  ?>
                    <?php } ?>

                </div>
                <div class="baixo" id="terceiroFinal">
                    <br>
                    <?php while($dadoong3 = $conong3->fetch_array()){ ?>
                    <?php echo $dadoong3['nome']; ?>
                    <br>
                    <?php echo $dadoong3['endereco'];  ?>
                    <?php } ?>
                </div>

                <button class="btnOpenModal" onclick="openModal()">Finalizar ou desistir da adoção</button>

                
                <script src="script.js"></script>


            </div>
            <div class="quadro">
            </div>
    </body>
    <footer>

        <div class="rodape">

            &copy;Projeto Grupo 2

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>