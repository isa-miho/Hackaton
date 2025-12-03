<?php
include "menu.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Faz Ai</title>

    <link rel="stylesheet" href="../view/public/css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

<div class="wrapper_perfil">

    <div class="content_perfil">

        <!-- FOTO + NOME + AVALIAÇÃO -->
        <div class="perfil_top">

            <div class="foto_usuario">
                <img src="../view/public/imagens/foto_perfil.webp" alt="Foto de Perfil">
            </div>

            <div class="info_usuario">
                <h2 class="nome_usuario">Maria Silva</h2>

                <div class="avaliacao_usuario">
                    <i class="fa-solid fa-star estrela"></i>
                    <span class="nota_usuario">4.5</span>
                </div>
            </div>

        </div>

        <!-- CONTAINER AVALIAÇÕES -->
        <div class="container_avaliacoes">

            <h3>Avaliações</h3>

            <div class="avaliacao_item">
                <p>Ótimo trabalho! Muito satisfeito com o serviço.</p>
            </div>

        </div>

        <!-- CONTAINER SERVIÇOS -->
        <div class="container_servicos">

            <h3>Serviços realizados</h3>

            <ul class="lista_servicos">
                <li>Desenvolvimento de site</li>
                <li>Criação de logotipo</li>
                <li>Design de material</li>
            </ul>

        </div>

    </div>

</div>

<?php include "footer.php"; ?>

</body>
</html>
