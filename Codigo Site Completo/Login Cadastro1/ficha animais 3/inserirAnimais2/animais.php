<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Animais</title>
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header> <button class="home"><a href="../../../SiteCachorro/index.html"> <img src="imagens/patinha.png" alt="home"></a> </button></header>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de Animal para adoção</h3>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                     ?>
                    <div class="notification is-success">
                        <p>Cadastro efetuado com sucesso!</p>
                    </div>

                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                     ?>
                    <div class="notification is-info" style="background-color: gray;">
                        <p>Animal já cadastrado na base de dados, favor tentar novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <div class="box">
                        <form action="cadastro.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder=" Nome do animal" autofocus>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input name="raca" class="input is-large" type="text"
                                            placeholder="raça">
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <input name="sexo" class="input is-large" type="text"
                                                placeholder="sexo">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <input name="idade" type="number" class="input is-large"
                                                placeholder="idade do animal">
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <input name="descricao" class="input is-large" type="text" placeholder="descricao">
                                            </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <label> Foto</label>
                                            <input name="foto" class="input is-large" type="file"
                                                placeholder="foto">
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <input name="status" class="input is-large" type="text"
                                                    placeholder="Statos adocao">
                                            </div>
                                    </div>
                                    <button type="submit"
                                        class="button is-block is-link is-large is-fullwidth" style="background-color: gray
                                        ;">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>