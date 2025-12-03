<?php
require_once 'config/database.php';
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cadastro — Criar Conta</title>
  <link rel="stylesheet" href="public/style.css">
</head>

<body>
  <div class="app-container">

    <div class="auth-section">

      <div class="auth-container">

        <!-- Card do formulário -->
        <div class="auth-card">
          <h1 class="auth-title">Crie sua Conta</h1>

          <form class="auth-form" method="POST" action="process-cadastro.php">

            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" id="nome" name="nome" class="form-input" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="tel" id="telefone" name="telefone" class="form-input">
            </div>

            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" id="password" name="password" class="form-input" required>
            </div>

            <div class="form-group">
              <label for="confirm-password">Confirmar Senha</label>
              <input type="password" id="confirm-password" name="confirm-password" class="form-input" required>
            </div>

            <button type="submit" class="btn btn-primary btn-full">Cadastrar</button>
          </form>

          <p class="auth-text">
            Já possui conta?
            <a href="login.php">Entrar</a>
          </p>
        </div>

        <!-- Área da imagem -->
        <div class="auth-image">
          <div class="auth-placeholder"></div>
        </div>

      </div>

    </div>

  </div>

</body>
</html>
