<?php 
require_once 'config/database.php';
include 'includes/header.php'; 
?>

<link rel="stylesheet" href="public/style.css">

<main class="main-content">
    <section class="chat-section">
        <h1 class="section-title">Chat com Clientes</h1>
        
        <div class="chat-container">

            <!-- Chat Sidebar -->
            <div class="chat-sidebar">
                <div class="chat-search">
                    <input type="text" placeholder="Buscar conversa..." class="chat-search-input">
                </div>

                <div class="chat-list">

                    <!-- Chat Item - Ativo -->
                    <div class="chat-item active" onclick="selectChat(this)">
                        <div class="chat-avatar">M</div>
                        <div class="chat-info">
                            <h4>Maria Santos</h4>
                            <p>Passear com Cachorro</p>
                        </div>
                        <span class="chat-badge">2</span>
                    </div>

                    <!-- Chat Item -->
                    <div class="chat-item" onclick="selectChat(this)">
                        <div class="chat-avatar">C</div>
                        <div class="chat-info">
                            <h4>Carlos Lima</h4>
                            <p>Já estou a caminho!</p>
                        </div>
                    </div>

                    <!-- Chat Item -->
                    <div class="chat-item" onclick="selectChat(this)">
                        <div class="chat-avatar">A</div>
                        <div class="chat-info">
                            <h4>Ana Costa</h4>
                            <p>Obrigada pelo trabalho!</p>
                        </div>
                    </div>

                    <!-- Chat Item -->
                    <div class="chat-item" onclick="selectChat(this)">
                        <div class="chat-avatar">J</div>
                        <div class="chat-info">
                            <h4>Julia Ferreira</h4>
                            <p>Quando você está disponível?</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Chat Main -->
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

                <div class="chat-input-area">
                    <input type="text" id="messageInput" placeholder="Digite sua mensagem..." class="chat-input" onkeypress="handleKeyPress(event)">
                    <button class="btn btn-primary" onclick="sendMessage()">Enviar</button>
                </div>

            </div>

        </div>
    </section>
</main>

<script src="script-chat.js"></script>

<?php include 'includes/footer.php'; ?>
