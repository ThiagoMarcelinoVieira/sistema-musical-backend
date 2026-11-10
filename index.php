<?php
/*
 * =============================================
 * ARQUIVO: index.php
 * FUNÇÃO: Menu principal do sistema
 * =============================================
 *
 * Primeira página após o login.
 * valida_sessao.php garante que apenas usuários
 * logados chegam até aqui.
 */
include('valida_sessao.php');
?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema Musical</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <div class="container">
    <div class="topbar">
      <a href="logout.php" class="btn-back">🚪Sair</a>
    </div>

    <div class="page-header">
      <h1>🎵 Sistema Musical</h1>
      <p>Olá, <strong><?php echo htmlspecialchars($_SESSION['usuario']) ?></strong>! O que deseja fazer?</p>
    </div>

    <div class="menu-grid">
      <div class="menu-card">
        <a href="cadastro_artista.php">
          <div class="menu-icon">🎤</div>
          <h2>Gerenciar Artistas</h2>
          <p>Cadastre e edite artistas</p>
        </a>
      </div>

      <div class="menu-card">
        <a href="cadastro_musica.php">
          <div class="menu-icon">🎵</div>
          <h2>Cadastrar Músicas</h2>
          <p>Adicione músicas ao sistema</p>
        </a>
      </div>

      <div class="menu-card">
        <a href="listagem_musicas.php">
          <div class="menu-icon">🎶</div>
          <h2>Biblioteca Musical</h2>
          <p>Visualize e filtre todas as músicas</p>
        </a>
      </div>
    </div>
  </div>
</body>

</html>