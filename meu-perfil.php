<?php 
require_once 'config/database.php';
include 'includes/header.php'; 
?>

<main class="main-content">
    <section class="profile-section">

        <h1 class="section-title">Meu Perfil</h1>

        <div class="profile-container">

            <!-- Profile Card -->
            <div class="profile-card">

                <div class="profile-header">
                    <div class="profile-avatar">JS</div>

                    <div class="profile-info">
                        <h2 class="profile-name">João Silva</h2>
                        <p class="profile-since">Freelancer desde 2023</p>
                        <div class="profile-rating">⭐⭐⭐⭐⭐ 4.8 (45 avaliações)</div>
                    </div>
                </div>

                <!-- Profile Stats -->
                <div class="profile-stats">
                    <div class="profile-stat">
                        <strong>125</strong>
                        <span>Serviços Completos</span>
                    </div>

                    <div class="profile-stat">
                        <strong>98%</strong>
                        <span>Taxa de Sucesso</span>
                    </div>

                    <div class="profile-stat">
                        <strong>R$ 5.200</strong>
                        <span>Total Ganho</span>
                    </div>
                </div>

                <!-- Profile Form -->
                <div class="profile-form">

                    <h3 class="form-title">Editar Informações</h3>

                    <form method="POST" action="process-perfil.php">

                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input 
                                type="text" 
                                id="nome" 
                                name="nome" 
                                class="form-input" 
                                value="João Silva"
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input" 
                                value="joao.silva@email.com"
                            >
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input 
                                type="tel" 
                                id="telefone" 
                                name="telefone" 
                                class="form-input" 
                                value="(11) 98765-4321"
                            >
                        </div>

                        <div class="form-group">
                            <label for="localizacao">Localização</label>
                            <input 
                                type="text" 
                                id="localizacao" 
                                name="localizacao" 
                                class="form-input" 
                                value="São Paulo, SP"
                            >
                        </div>

                        <div class="form-group">
                            <label for="sobre">Sobre Você</label>
                            <textarea 
                                id="sobre" 
                                name="sobre" 
                                class="form-input" 
                                rows="4"
                            >Freelancer dedicado com experiência em diversos tipos de serviços. Pontual, responsável e sempre disposto a ajudar!</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full">
                            Salvar Alterações
                        </button>
                    </form>
                </div>
            </div>

            <!-- Profile Sidebar -->
            <div class="profile-sidebar">

                <div class="sidebar-card">
                    <h3>Histórico de Avaliações</h3>

                    <div class="reviews-list">

                        <div class="review-item">
                            <div class="review-header">
                                <strong>Maria Santos</strong>
                                <span class="review-rating">⭐⭐⭐⭐⭐</span>
                            </div>
                            <p class="review-text">"Excelente trabalho! Muito profissional."</p>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <strong>Carlos Lima</strong>
                                <span class="review-rating">⭐⭐⭐⭐⭐</span>
                            </div>
                            <p class="review-text">"Entrega rápida e de qualidade."</p>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <strong>Ana Costa</strong>
                                <span class="review-rating">⭐⭐⭐⭐</span>
                            </div>
                            <p class="review-text">"Bom serviço, recomendo!"</p>
                        </div>

                    </div>
                </div>

                <div class="sidebar-card">
                    <h3>Configurações</h3>

                    <div class="settings-list">
                        <a href="#" class="settings-link">Alterar Senha</a>
                        <a href="#" class="settings-link">Privacidade</a>
                        <a href="#" class="settings-link">Notificações</a>
                        <a href="logout.php" class="settings-link settings-link-danger">Sair</a>
                    </div>

                </div>
            </div>

        </div>

    </section>
</main>

<?php include 'includes/footer.php'; ?>
