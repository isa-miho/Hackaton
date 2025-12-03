<?php include 'includes/header.php'; ?>

<main class="main-content">
    <section class="auth-section">
        <div class="auth-container">

            <div class="auth-card">
                <h1 class="auth-title">Login</h1>

                <form class="auth-form" method="POST" action="process-login.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input" 
                            required 
                            placeholder="seu@email.com"
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-input" 
                            required 
                            placeholder="••••••••"
                        >
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">Entrar</button>
                </form>

                <p class="auth-text">
                    Não tem conta? <a href="cadastro.php">Cadastre-se aqui</a>
                </p>
            </div>

            <div class="auth-image">
                <div class="auth-placeholder">
                    <svg width="250" height="250" viewBox="0 0 250 250" fill="none">
                        <circle cx="125" cy="80" r="35" fill="#d686ee"/>
                        <rect x="80" y="130" width="90" height="80" rx="10" fill="#00524c"/>
                        <circle cx="100" cy="150" r="5" fill="#fff"/>
                        <circle cx="150" cy="150" r="5" fill="#fff"/>
                        <path d="M105 170 Q125 180 145 170" stroke="#fff" stroke-width="2" fill="none"/>
                    </svg>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
