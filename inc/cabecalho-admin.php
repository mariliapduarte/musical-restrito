<?php
  require "funcoes-sessao.php"; 
  verificaAcesso();


//Detectanto quando o "sair" é acionado
if(isset($_GET['sair'])) {
  //chamamos a função logout
  logout();

}


// Guardando o nome da página atual
$pagina = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Musical Talentos - Restrito</title>

  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <header>
    <nav>
      <div class="menu navbar nav">
      <a class="navbar-brand" href="index.php">Musical Talentos</a>

            <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarDropdown">
                <span>&#9776;</span>
            </button>

         <ul class="navbar-nav">
            <li class="nav-link"><a href="index.php">Home</a></li>
            <li class="nav-link"><a href="meu-perfil.php">Meu perfil</a></li>
            <li class="nav-link"><a href="posts.php">Comunicados</a></li>

            <?php if($_SESSION['tipo'] == 'admin'){ ?>
            <li class="nav-link"><a href="usuarios.php">Usuários</a></li>
            <?php }?>

            <li class="nav-link"><a href="../index.php" target="_blank">Área pública</a></li>
            <li class="nav-link"><a href="?sair">&times; Sair</a></li>
          </ul>
      </div>
    </nav>

  </header>

  <main class="conteudo limitador">