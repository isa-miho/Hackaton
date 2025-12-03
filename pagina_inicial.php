<?php
require_once 'config/database.php';

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$busca = isset($_GET['busca']) ? $_GET['busca'] : '';

$result = buscarServicos($conn, $categoria, $busca);
$servicos = [];
while ($row = $result->fetch_assoc()) {
    $servicos[] = $row;
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Serviços — Contrate Freelancers</title>
  <link rel="stylesheet" href="public/pagina_inicial.css">
</head>
<body>
  <div class="app-container">
    <!-- Controles de Busca e Filtro -->
    <div class="controls-section">
      <div class="search-box" role="search">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
          <path d="M21 21l-4.35-4.35" stroke="#6b6b6b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="11" cy="11" r="6" stroke="#6b6b6b" stroke-width="2"/>
        </svg>
        <input id="searchInput" class="search-input" placeholder="Buscar serviços..." value="<?php echo htmlspecialchars($busca); ?>" />
      </div>
      <div class="filter-chips" id="filterChips">
        <button class="chip-button <?php echo $categoria === '' ? 'active' : ''; ?>" data-category="">Todos</button>
        <button class="chip-button <?php echo $categoria === 'aberto' ? 'active' : ''; ?>" data-category="aberto">Disponível</button>
        <button class="chip-button <?php echo $categoria === 'andamento' ? 'active' : ''; ?>" data-category="andamento">Em Andamento</button>
        <button class="chip-button <?php echo $categoria === 'concluido' ? 'active' : ''; ?>" data-category="concluido">Concluído</button>
        <button class="chip-button <?php echo $categoria === 'cancelado' ? 'active' : ''; ?>" data-category="cancelado">Cancelado</button>
      </div>
    </div>

    <!-- Grid de Serviços -->
    <div class="services-grid" id="servicesGrid">
      <?php if (count($servicos) > 0): ?>
        <?php foreach ($servicos as $service): ?>
          <article class="service-card" data-id="<?php echo $service['idCD_servicos']; ?>" data-category="<?php echo $service['status']; ?>">
            <div class="card-header">
              <span class="category-badge badge-<?php echo mapearStatusCategoria($service['status']); ?>">
                <?php 
                  $statusLabels = [
                    'aberto' => 'Disponível',
                    'andamento' => 'Em Andamento',
                    'concluido' => 'Concluído',
                    'cancelado' => 'Cancelado'
                  ];
                  echo $statusLabels[$service['status']] ?? ucfirst($service['status']); 
                ?>
              </span>
              <span class="price-tag">R$ <?php echo number_format($service['valor'], 2, ',', '.'); ?></span>
            </div>
            <h3 class="service-title"><?php echo htmlspecialchars($service['nome']); ?></h3>
            <p class="service-description"><?php echo htmlspecialchars($service['descricao']); ?></p>
            <div class="card-details">
              <span class="detail-item">👤 <?php echo htmlspecialchars($service['cliente_nome']); ?></span>
              <span class="detail-item">📅 <?php echo date('d/m/Y', strtotime($service['data_publicacao'])); ?></span>
              <?php if ($service['prazo']): ?>
                <span class="detail-item">⏰ Prazo: <?php echo date('d/m/Y', strtotime($service['prazo'])); ?></span>
              <?php endif; ?>
            </div>
            <div class="card-footer">
              <span class="client-info"><?php echo htmlspecialchars($service['cliente_email']); ?></span>
              <button 
                class="action-button btn-primary select-service-btn" 
                data-id="<?php echo $service['idCD_servicos']; ?>"
              >
                Aceitar
              </button>
            </div>
          </article>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="empty-state">Nenhum serviço encontrado. Tente outro termo de busca ou categoria.</div>
      <?php endif; ?>
    </div>
  </div>

  <!-- Botão Flutuante de Carrinho -->
  <button class="cart-fab" id="cartButton" title="Ver serviços selecionados">
    <span id="cartLabel">Selecionados</span>
    <span class="cart-count-badge" id="cartCount">0</span>
  </button>

  <!-- Modal de Serviços Selecionados -->
  <div class="modal-overlay" id="modal" role="dialog" aria-modal="true">
    <div class="modal-content">
      <h2 class="modal-title">Serviços Selecionados</h2>
      <div class="modal-list" id="modalList"></div>
      <div class="modal-actions">
        <button class="modal-btn modal-btn-secondary" id="modalClose">Fechar</button>
        <button class="modal-btn modal-btn-primary" id="modalHire">Contratar</button>
      </div>
    </div>
  </div>

  <script src="script-pagina_inicial.js"></script>
</body>
</html>

<?php
$conn->close();
?>