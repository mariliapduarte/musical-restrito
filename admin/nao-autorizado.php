<?php require "../inc/cabecalho-admin.php"; 

?> 
       
  <article class="conteudo limitador">
    <h2>Não autorizado</h2>
    <hr class="my-4">
    <p class="lead">
      Desculpe <b><?=$_SESSION['nome']?></b>, mas você <span class="badge badge-danger">não tem permissão</span> para acessar este recurso.</p>
    <hr class="my-4">
    <p class="lead">
    <a class="btn btn-primary" href="index.php">Voltar para a página inicial</a>
    </p>
  </article>


<?php require "../inc/rodape-admin.php"; ?> 