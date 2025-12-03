<?php 
require_once 'config/database.php';
include 'includes/header.php'; 
?>

<link rel="stylesheet" href="public/style.css">

<main class="main-content">
    <section class="dashboard-section">
        <h1 class="section-title">Dashboard</h1>
        
        <div class="dashboard-grid">

            <!-- Estatísticas -->
            <div class="stats-container">

                <div class="stat-card">
                    <div class="stat-icon stat-icon-blue">📊</div>
                    <div class="stat-info">
                        <h3>Serviços Totais</h3>
                        <p class="stat-number">125</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon stat-icon-green">✅</div>
                    <div class="stat-info">
                        <h3>Concluídos</h3>
                        <p class="stat-number">98</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon stat-icon-yellow">⏳</div>
                    <div class="stat-info">
                        <h3>Em Andamento</h3>
                        <p class="stat-number">15</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon stat-icon-purple">💰</div>
                    <div class="stat-info">
                        <h3>Ganhos Totais</h3>
                        <p class="stat-number">R$ 5.200</p>
                    </div>
                </div>

            </div>

            <!-- Serviços Recentes -->
            <div class="dashboard-section-box">
                <h2 class="subsection-title">Serviços Recentes</h2>

                <div class="services-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Serviço</th>
                                <th>Cliente</th>
                                <th>Status</th>
                                <th>Valor</th>
                                <th>Ação</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Passear com Cachorro</td>
                                <td>Maria Santos</td>
                                <td><span class="badge badge-pending">Pendente</span></td>
                                <td>R$ 50,00</td>
                                <td><button class="btn btn-small btn-primary">Iniciar</button></td>
                            </tr>

                            <tr>
                                <td>Entregar Encomenda</td>
                                <td>Carlos Lima</td>
                                <td><span class="badge badge-in-progress">Em Andamento</span></td>
                                <td>R$ 35,00</td>
                                <td><button class="btn btn-small btn-success">Finalizar</button></td>
                            </tr>

                            <tr>
                                <td>Montagem de Móvel</td>
                                <td>Ana Costa</td>
                                <td><span class="badge badge-completed">Concluído</span></td>
                                <td>R$ 80,00</td>
                                <td><button class="btn btn-small btn-outline">Ver</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
