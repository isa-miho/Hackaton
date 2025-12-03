<?php
// Header com navegação
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <a href="index.php" class="logo-link">FZ</a>
            </div>
            <div class="navbar-menu">
                <a href="index.php" class="nav-link <?php echo $currentPage === 'index' ? 'active' : ''; ?>">Home</a>
                <a href="pagina_inicial.php" class="nav-link <?php echo $currentPage === 'pagina_inicial' ? 'active' : ''; ?>">Serviços</a>
                <a href="dashboard.php" class="nav-link <?php echo $currentPage === 'dashboard' ? 'active' : ''; ?>">Dashboard</a>
                <a href="minhas-tarefas.php" class="nav-link <?php echo $currentPage === 'minhas-tarefas' ? 'active' : ''; ?>">Tarefas</a>
                <a href="chat.php" class="nav-link <?php echo $currentPage === 'chat' ? 'active' : ''; ?>">Chat</a>
                <a href="meu-perfil.php" class="nav-link <?php echo $currentPage === 'meu-perfil' ? 'active' : ''; ?>">Perfil</a>
            </div>
            <div class="navbar-auth">
                <a href="login.php" class="btn-login">Login</a>
            </div>
        </div>
    </nav>