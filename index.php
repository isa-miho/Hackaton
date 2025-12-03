<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="public/style.css">

<main class="main-content">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Encontre Freelancers para Seus Projetos</h1>
            <p class="hero-subtitle">Contrate profissionais talentosos para completar seus serviços rapidamente</p>
            <div class="hero-buttons">
                <a href="pagina_inicial.php" class="btn btn-primary">Ver Serviços</a>
                <a href="meu-perfil.php" class="btn btn-secondary">Meu Perfil</a>
            </div>
        </div>

        <div class="hero-image">
            <div class="hero-placeholder">
                <svg width="300" height="300" viewBox="0 0 300 300" fill="none">
                    <circle cx="150" cy="150" r="140" fill="#edf1d6" stroke="#00524c" stroke-width="2"/>
                    <path d="M100 150 L140 190 L200 110" stroke="#19ac3b" stroke-width="3" fill="none" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <h2 class="section-title">Por que usar FreeLance Connect?</h2>

        <div class="features-grid">

            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>Rápido</h3>
                <p>Encontre profissionais qualificados em poucos minutos</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>Preços Competitivos</h3>
                <p>Compare preços e escolha a melhor opção para seu orçamento</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⭐</div>
                <h3>Avaliações Confiáveis</h3>
                <p>Veja avaliações de clientes anteriores antes de contratar</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Seguro</h3>
                <p>Transações protegidas e comunicação segura com freelancers</p>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Pronto para começar?</h2>
        <p>Junte-se a milhares de clientes satisfeitos na FreeLance Connect</p>
        <a href="pagina_inicial.php" class="btn btn-primary btn-large">Explorar Serviços Agora</a>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
