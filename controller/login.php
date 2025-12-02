<?php
include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Faz ai</title>
    <link rel="stylesheet" href="../view/public/css/login.css">
    <link rel="stylesheet" href="../view/public/css/footer.css">
</head>

<body>

    <div class="wrapper_login">

        <div class="content_login">

            <div class="container_login">
                <div class="form_login">

                    <div class="img_login">
                        <img src="../view/public/imagens/logo.png" alt="">
                        <h2 class="h2_login">Login</h2>
                    </div>

                    <form action="" method="POST" id="myForm" class="formulario_login">
                        <input type="text" name="usuario" placeholder="Nome do usuário ou E-mail" class="input_login">
                        <input type="password" name="senha" placeholder="Senha" class="input_login">
                        <div class="g-recaptcha" data-sitekey="6LdyqOUrAAAAAGCnu7xdDfJ4QovvUsJMRuOgUvOa"></div>
                    </form>

                    <div class="button_login">
                        <button class="vermelho_login">Cancelar</button>
                        <button class="verde_login">Login</button>
                    </div>

                    <div class="p_login">
                        <p><a href="">Esqueci minha senha</a></p>
                        <p><a href="cadastro.php">Cadastre-se</a></p>
                    </div>

                </div>
            </div>

        </div>

        <?php include "footer.php"; ?>

    </div>

</body>
</html>
