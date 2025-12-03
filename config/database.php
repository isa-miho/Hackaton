<?php
// Configuração de conexão com o banco de dados
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'faz_ai');

// Criar conexão
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Configurar charset para UTF-8
$conn->set_charset("utf8");

// Função para buscar todos os serviços com filtros opcionais
function buscarServicos($conn, $categoria = '', $busca = '') {
    $sql = "SELECT s.idCD_servicos, s.nome, s.valor, s.descricao, s.status, s.data_publicacao, s.prazo, u.Nome as cliente_nome, u.Email as cliente_email FROM Servicos s INNER JOIN usuarios u ON s.Usuarios_idCD_usuarios = u.idCD_usuarios WHERE 1=1";
    
    if ($categoria && $categoria !== '') {
        $categoria = $conn->real_escape_string($categoria);
        $sql .= " AND s.status = '$categoria'";
    }
    
    if ($busca && $busca !== '') {
        $busca = $conn->real_escape_string($busca);
        $sql .= " AND (s.nome LIKE '%$busca%' OR s.descricao LIKE '%$busca%')";
    }
    
    $sql .= " ORDER BY s.data_publicacao DESC";
    
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Erro na consulta: " . $conn->error);
    }
    
    return $result;
}

// Função para buscar um serviço específico
function buscarServicoPorId($conn, $id) {
    $id = intval($id);
    $sql = "SELECT s.*, u.Nome as cliente_nome, u.Email as cliente_email FROM Servicos s INNER JOIN usuarios u ON s.Usuarios_idCD_usuarios = u.idCD_usuarios WHERE s.idCD_servicos = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

// Função para mapear status a categorias
function mapearStatusCategoria($status) {
    $mapa = [
        'aberto' => 'entregas',
        'andamento' => 'andamento',
        'concluido' => 'concluido',
        'cancelado' => 'cancelado'
    ];
    return $mapa[$status] ?? 'outros';
}
?>