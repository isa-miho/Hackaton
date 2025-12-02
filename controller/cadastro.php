<?php
include "menu.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Faz ai</title>
    <link rel="stylesheet" href="../view/public/css/cadastro.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <header>
        <div class="container_cadastro">
            <div class="form_cadastro">
                <div class="img_cadastro">
                    <img src="../view/public/imagens/logo.png" alt="">
                    <h2 class="h2_cadastro">Cadastro</h2>
                </div>
                <form action="" method="POST" id="myForm" class="formulario_cadastro">
                    <input type="text" name="usuario" id="" placeholder="Nome do usuário" class="input_cadastro">
                    <input type="email" name="email" id="" placeholder="E-mail" class="input_cadastro">
                    <input type="password" name="senha" id="" placeholder="Senha" class="input_cadastro">
                    <input type="password" name="confirmaSenha" id="" placeholder="Confirmar senha" class="input_cadastro">
                    <div class="g-recaptcha" data-sitekey=""></div>
                </form>
                <div class="button_cadastro">
                    <button class="vermelho_cadastro">Cancelar</button>
                    <button class="verde_cadastro" >Cadastrar</button>
                </div>
                <div class="">
                    <p class="p_cadastro">Já tem conta?<a class="a_cadastro" href="cadastro.php">Login</a></p>
                </div>

            </div>
        </div>
        
        <?php include "footer.php"; ?>
    </header>
    
</body>
</html>