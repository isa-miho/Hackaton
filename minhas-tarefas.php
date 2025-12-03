<?php 
require_once 'config/database.php';
include 'includes/header.php'; 
?>

    <main class="main-content">
        <section class="tasks-section">
            <h1 class="section-title">Minhas Tarefas</h1>
            
            <div class="tasks-filters">
                <button class="filter-btn active" data-filter="todas">Todas</button>
                <button class="filter-btn" data-filter="pendente">Pendentes</button>
                <button class="filter-btn" data-filter="andamento">Em Andamento</button>
                <button class="filter-btn" data-filter="concluida">Concluídas</button>
            </div>

            <div class="tasks-container">
                <!-- Task Card - Pendente -->
                <div class="task-card task-pending">
                    <div class="task-header">
                        <h3 class="task-title">Passear com Cachorro</h3>
                        <span class="task-badge badge-pending">Pendente</span>
                    </div>
                    <div class="task-body">
                        <p class="task-client">Cliente: <strong>Maria Santos</strong></p>
                        <p class="task-description">Passear com meu Golden Retriever por 1 hora no parque</p>
                        <div class="task-details">
                            <span class="detail">📍 Jardim Paulista</span>
                            <span class="detail">⏰ Hoje, 16:00</span>
                            <span class="detail">💰 R$ 50,00</span>
                        </div>
                    </div>
                    <div class="task-footer">
                        <button class="btn btn-secondary">Iniciar</button>
                        <button class="btn btn-outline">Chat</button>
                    </div>
                </div>

                <!-- Task Card - Em Andamento -->
                <div class="task-card task-in-progress">
                    <div class="task-header">
                        <h3 class="task-title">Entregar Documentos</h3>
                        <span class="task-badge badge-in-progress">Em Andamento</span>
                    </div>
                    <div class="task-body">
                        <p class="task-client">Cliente: <strong>Carlos Lima</strong></p>
                        <p class="task-description">Entrega de documentos urgentes no centro da cidade</p>
                        <div class="task-details">
                            <span class="detail">📍 Centro → Pinheiros</span>
                            <span class="detail">⏰ Urgente</span>
                            <span class="detail">💰 R$ 35,00</span>
                        </div>
                    </div>
                    <div class="task-footer">
                        <button class="btn btn-success">Finalizar</button>
                        <button class="btn btn-outline">Chat</button>
                    </div>
                </div>

                <!-- Task Card - Concluída -->
                <div class="task-card task-completed">
                    <div class="task-header">
                        <h3 class="task-title">Montagem de Estante</h3>
                        <span class="task-badge badge-completed">Concluído</span>
                    </div>
                    <div class="task-body">
                        <p class="task-client">Cliente: <strong>Ana Costa</strong></p>
                        <p class="task-description">Montagem de estante de 3 módulos</p>
                        <div class="task-details">
                            <span class="detail">📍 Vila Mariana</span>
                            <span class="detail">⏰ Ontem</span>
                            <span class="detail">💰 R$ 80,00</span>
                            <span class="detail">⭐ 5.0</span>
                        </div>
                    </div>
                    <div class="task-footer">
                        <button class="btn btn-outline">Ver Avaliação</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>
