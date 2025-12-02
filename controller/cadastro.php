<?php
include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Faz ai</title>
    <link rel="stylesheet" href="../view/public/css/cadastro.css">
</head>

<body>

    <div class="wrapper_cadastro">

        <div class="content_cadastro">
            <div class="form_cadastro">
                <div class="img_cadastro">
                    <img src="../view/public/imagens/logo.png" alt="">
                    <h2 class="h2_cadastro">Cadastro</h2>
                </div>

                <form action="" method="POST" id="myForm" class="formulario_cadastro">
                    <input type="text" name="usuario" placeholder="Nome do usuário" class="input_cadastro">
                    <input type="email" name="email" placeholder="E-mail" class="input_cadastro">
                    <input type="password" name="senha" placeholder="Senha" class="input_cadastro">
                    <input type="password" name="confirmaSenha" placeholder="Confirmar senha" class="input_cadastro">
                    <div class="g-recaptcha" data-sitekey="6LdyqOUrAAAAAGCnu7xdDfJ4QovvUsJMRuOgUvOa"></div>
                </form>

                <div class="button_cadastro">
                    <button class="vermelho_cadastro">Cancelar</button>
                    <button class="verde_cadastro">Cadastrar</button>
                </div>

                <div>
                    <p class="p_cadastro">Já tem conta? <a href="cadastro.php">Login</a></p>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </div>

</body>
</html>
