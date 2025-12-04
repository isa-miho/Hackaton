<?php include "view/menu.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Card Glass</title>
    <link rel="stylesheet" href="public/css/L_page.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <!-- EXEMPLO 3: Card Vertical com Glass Effect -->
    <section class="er_section-glass">
        <div class="er_card-glass-content">
            <!-- <span class="er_card-glass-tag">Sobre Nós</span> -->
            <h3>Nossa História</h3>
            <p>
                Combinamos expertise técnica com criatividade para desenvolver projetos únicos. 
                Cada desafio é uma oportunidade de inovar e superar expectativas, sempre focando 
                na qualidade e satisfação dos nossos clientes.
            </p>
        </div>
    
        <div class="er_card-glass-image">
            <img src="public/imagens/logo.png" alt="">
        </div>
    </section>
    <section class="er_section-split">
        <div class="er_card-split">
            <div class="er_card-split-image">
                <!-- Substitua o conteúdo abaixo por: <img src="caminho/para/imagem.jpg" alt="Projeto"> -->
            </div>
            <div class="er_card-split-content">
                <h3>Sobre Nós</h3>
                <p>
                    Somos uma equipe apaixonada por criar soluções inovadoras que transformam ideias em realidade. 
                    Com anos de experiência no mercado, desenvolvemos projetos que conectam tecnologia e criatividade 
                    para entregar resultados excepcionais.
                </p>
                <div class="er_card-glass-stats">
                    <div class="er_card-glass-stat">
                        <span class="er_card-glass-stat-number">100+</span>
                        <span class="er_card-glass-stat-label">Projetos</span>
                    </div>
                    <div class="er_card-glass-stat-client">
                        <span class="er_card-glass-stat-number">50+</span>
                        <span class="er_card-glass-stat-label">Clientes</span>
                </div>
            </div>
        </div>
    </section>
    <?php include "view/footer.php"; ?>



</body>
</html>


