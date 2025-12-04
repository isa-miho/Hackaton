<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Freelancer - FreeLance Connect</title>
    <link rel="stylesheet" href="../public/css/pagina_inicial.css">
</head>
<body class="dashboard-body">
    <div class="dashboard-container">

        <!-- Main Content -->
        <main class="main-content">

            <!-- Serviços Disponíveis Section -->
            <div id="servicos" class="content-section active">
                <div class="section-header">
                    <h2>Serviços Disponíveis</h2>
                    <div class="filter-buttons">
                        <button class="filter-btn active" onclick="filterServices('todos')">Todos</button>
                        <button class="filter-btn" onclick="filterServices('entregas')">Entregas</button>
                        <button class="filter-btn" onclick="filterServices('pets')">Pets</button>
                        <button class="filter-btn" onclick="filterServices('outros')">Outros</button>
                    </div>
                </div>

                <div class="services-grid">
                    <div class="service-card" data-category="pets">
                        <div class="service-header">
                            <span class="service-badge badge-green">Pets</span>
                            <span class="service-price">R$ 50,00</span>
                        </div>
                        <h3 class="service-title">Passear com Cachorro</h3>
                        <p class="service-description">Preciso de alguém para passear com meu Golden Retriever por 1 hora no parque</p>
                        <div class="service-details">
                            <span class="detail-item">📍 Jardim Paulista</span>
                            <span class="detail-item">⏰ Hoje, 16:00</span>
                        </div>
                        <div class="service-footer">
                            <span class="client-name">Maria Santos</span>
                            <button class="btn btn-small btn-primary" onclick="acceptService('Passear com Cachorro')">Aceitar</button>
                        </div>
                    </div>

                    <div class="service-card" data-category="entregas">
                        <div class="service-header">
                            <span class="service-badge badge-blue">Entrega</span>
                            <span class="service-price">R$ 35,00</span>
                        </div>
                        <h3 class="service-title">Entregar Encomenda</h3>
                        <p class="service-description">Entrega de documentos urgentes no centro da cidade</p>
                        <div class="service-details">
                            <span class="detail-item">📍 Centro → Pinheiros</span>
                            <span class="detail-item">⏰ Urgente</span>
                        </div>
                        <div class="service-footer">
                            <span class="client-name">Carlos Lima</span>
                            <button class="btn btn-small btn-primary" onclick="acceptService('Entregar Encomenda')">Aceitar</button>
                        </div>
                    </div>

                    <div class="service-card" data-category="outros">
                        <div class="service-header">
                            <span class="service-badge badge-purple">Outro</span>
                            <span class="service-price">R$ 80,00</span>
                        </div>
                        <h3 class="service-title">Montagem de Móvel</h3>
                        <p class="service-description">Montagem de estante de 3 módulos, ferramentas necessárias fornecidas</p>
                        <div class="service-details">
                            <span class="detail-item">📍 Vila Mariana</span>
                            <span class="detail-item">⏰ Amanhã, 10:00</span>
                        </div>
                        <div class="service-footer">
                            <span class="client-name">Ana Costa</span>
                            <button class="btn btn-small btn-primary" onclick="acceptService('Montagem de Móvel')">Aceitar</button>
                        </div>
                    </div>

                    <div class="service-card" data-category="entregas">
                        <div class="service-header">
                            <span class="service-badge badge-blue">Entrega</span>
                            <span class="service-price">R$ 45,00</span>
                        </div>
                        <h3 class="service-title">Buscar Compras no Mercado</h3>
                        <p class="service-description">Retirar compras em supermercado e entregar em casa</p>
                        <div class="service-details">
                            <span class="detail-item">📍 Morumbi</span>
                            <span class="detail-item">⏰ Hoje, 18:00</span>
                        </div>
                        <div class="service-footer">
                            <span class="client-name">Pedro Oliveira</span>
                            <button class="btn btn-small btn-primary" onclick="acceptService('Buscar Compras')">Aceitar</button>
                        </div>
                    </div>

                    <div class="service-card" data-category="pets">
                        <div class="service-header">
                            <span class="service-badge badge-green">Pets</span>
                            <span class="service-price">R$ 60,00</span>
                        </div>
                        <h3 class="service-title">Cuidar de Gato</h3>
                        <p class="service-description">Cuidar de 2 gatos por 4 horas (alimentar e brincar)</p>
                        <div class="service-details">
                            <span class="detail-item">📍 Itaim Bibi</span>
                            <span class="detail-item">⏰ Sábado, 14:00</span>
                        </div>
                        <div class="service-footer">
                            <span class="client-name">Julia Ferreira</span>
                            <button class="btn btn-small btn-primary" onclick="acceptService('Cuidar de Gato')">Aceitar</button>
                        </div>
                    </div>

                    <div class="service-card" data-category="outros">
                        <div class="service-header">
                            <span class="service-badge badge-purple">Outro</span>
                            <span class="service-price">R$ 70,00</span>
                        </div>
                        <h3 class="service-title">Limpeza de Quintal</h3>
                        <p class="service-description">Varrer e organizar quintal pequeno, retirar folhas</p>
                        <div class="service-details">
                            <span class="detail-item">📍 Brooklin</span>
                            <span class="detail-item">⏰ Domingo, 09:00</span>
                        </div>
                        <div class="service-footer">
                            <span class="client-name">Roberto Silva</span>
                            <button class="btn btn-small btn-primary" onclick="acceptService('Limpeza de Quintal')">Aceitar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Minhas Tarefas Section -->
            <div id="tarefas" class="content-section">
                <h2>Minhas Tarefas</h2>
                <div class="tasks-container">
                    <div class="task-card task-pending">
                        <div class="task-status">
                            <span class="status-badge status-pending">Pendente</span>
                            <span class="task-date">Hoje, 16:00</span>
                        </div>
                        <h3>Passear com Cachorro</h3>
                        <p>Cliente: Maria Santos</p>
                        <p class="task-location">📍 Jardim Paulista</p>
                        <div class="task-actions">
                            <button class="btn btn-small btn-secondary">Iniciar</button>
                            <button class="btn btn-small btn-outline">Chat</button>
                        </div>
                    </div>

                    <div class="task-card task-in-progress">
                        <div class="task-status">
                            <span class="status-badge status-in-progress">Em Andamento</span>
                            <span class="task-date">Agora</span>
                        </div>
                        <h3>Entregar Documentos</h3>
                        <p>Cliente: Carlos Lima</p>
                        <p class="task-location">📍 Centro → Pinheiros</p>
                        <div class="task-actions">
                            <button class="btn btn-small btn-success">Finalizar</button>
                            <button class="btn btn-small btn-outline">Chat</button>
                        </div>
                    </div>

                    <div class="task-card task-completed">
                        <div class="task-status">
                            <span class="status-badge status-completed">Concluído</span>
                            <span class="task-date">Ontem</span>
                        </div>
                        <h3>Montagem de Estante</h3>
                        <p>Cliente: Ana Costa</p>
                        <p class="task-location">📍 Vila Mariana</p>
                        <div class="task-rating">
                            <span>Avaliação: ⭐⭐⭐⭐⭐</span>
                            <span class="task-payment">R$ 80,00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat Section -->
            <div id="chat" class="content-section">
                <h2>Chat com Clientes</h2>
                <div class="chat-container">
                    <div class="chat-sidebar">
                        <div class="chat-list">
                            <div class="chat-item active" onclick="openChat('Maria Santos')">
                                <div class="chat-avatar">M</div>
                                <div class="chat-info">
                                    <h4>Maria Santos</h4>
                                    <p>Passear com Cachorro</p>
                                </div>
                                <span class="chat-badge">2</span>
                            </div>
                            <div class="chat-item" onclick="openChat('Carlos Lima')">
                                <div class="chat-avatar">C</div>
                                <div class="chat-info">
                                    <h4>Carlos Lima</h4>
                                    <p>Já estou a caminho!</p>
                                </div>
                            </div>
                            <div class="chat-item" onclick="openChat('Ana Costa')">
                                <div class="chat-avatar">A</div>
                                <div class="chat-info">
                                    <h4>Ana Costa</h4>
                                    <p>Obrigada pelo trabalho!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-main">
                        <div class="chat-header">
                            <div class="chat-header-info">
                                <h3>Maria Santos</h3>
                                <span class="status-online">Online</span>
                            </div>
                        </div>
                        <div class="chat-messages" id="chatMessages">
                            <div class="message message-received">
                                <div class="message-content">
                                    <p>Olá! Você pode passear com meu cachorro hoje às 16:00?</p>
                                    <span class="message-time">14:30</span>
                                </div>
                            </div>
                            <div class="message message-sent">
                                <div class="message-content">
                                    <p>Sim, posso sim! Qual é a raça do seu cachorro?</p>
                                    <span class="message-time">14:32</span>
                                </div>
                            </div>
                            <div class="message message-received">
                                <div class="message-content">
                                    <p>É um Golden Retriever super tranquilo. Ele adora o parque!</p>
                                    <span class="message-time">14:35</span>
                                </div>
                            </div>
                            <div class="message message-sent">
                                <div class="message-content">
                                    <p>Perfeito! Eu amo Golden. Estarei aí pontualmente às 16:00.</p>
                                    <span class="message-time">14:36</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat-input">
                            <input type="text" id="messageInput" placeholder="Digite sua mensagem..." onkeypress="handleKeyPress(event)">
                            <button class="btn btn-primary" onclick="sendMessage()">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Perfil Section -->
            <div id="perfil" class="content-section">
                <h2>Meu Perfil</h2>
                <div class="profile-container">
                    <div class="profile-card">
                        <div class="profile-header">
                            <div class="profile-avatar">JS</div>
                            <div class="profile-info">
                                <h3>João Silva</h3>
                                <p>Freelancer desde 2023</p>
                                <div class="profile-rating">⭐⭐⭐⭐⭐ 4.8 (45 avaliações)</div>
                            </div>
                        </div>
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
                        <div class="profile-form">
                            <div class="form-group">
                                <label>Nome Completo</label>
                                <input type="text" value="João Silva" class="form-input">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="joao.silva@email.com" class="form-input">
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="tel" value="(11) 98765-4321" class="form-input">
                            </div>
                            <div class="form-group">
                                <label>Localização</label>
                                <input type="text" value="São Paulo, SP" class="form-input">
                            </div>
                            <div class="form-group">
                                <label>Sobre Você</label>
                                <textarea class="form-input" rows="4">Freelancer dedicado com experiência em diversos tipos de serviços. Pontual, responsável e sempre disposto a ajudar!</textarea>
                            </div>
                            <button class="btn btn-primary">Salvar Alterações</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="../public/js/script-pagina_inicial.js"></script>
</body>
</html>
