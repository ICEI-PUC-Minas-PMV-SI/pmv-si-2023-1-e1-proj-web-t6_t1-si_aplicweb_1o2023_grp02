<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro instituição</title>
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header> <button class="home"><a href="../SiteCachorro/index.html"> <img src="imagens/patinha.png" alt="home"></a> </button></header>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro da instituição</h3>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                     ?>
                    <div class="notification is-success">
                        <p>Cadastro efetuado!</p>
                        <p>Faça login informando o seu Email e senha <a href="login Ong.php">aqui</a></p>
                    </div>

                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                     ?>
                    <div class="notification is-info" style="background-color: gray;">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <div class="box">
                        <form action="cadastrarOng.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input name="descricao" class="input is-large" type="text"
                                            placeholder="Descrição sobre a instituição">
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <input name="telefone" class="input is-large" type="tel"
                                                placeholder="telefone">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <input name="email" type="email" class="input is-large"
                                                placeholder="Email">
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <input name="endereco" class="input is-large" type="text" placeholder="Endereço">
                                            </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <input name="senha" class="input is-large" type="password"
                                                placeholder="Senha">
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