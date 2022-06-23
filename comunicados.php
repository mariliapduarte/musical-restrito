<?php 

require "inc/cabecalho.php";
require "inc/funcoes-posts.php";

$posts = lerTodosOsPosts($conexao);

?>

<div class="noticias limitador">
  <!-- INÍCIO ROW -->  

  
  <?php foreach( $posts as $post ) { ?>
  <!-- INÍCIO Card -->
  <div>
    
  
    <article class="noticias limitador">
   
      <a href="post-detalhe.php?id=<?=$post['id']?>"> <!-- colocamos o ID na URL para puxar a noticia (id) em que clicar -->
        <img class="imgp" src="imagens/<?=$post['imagem']?>" alt="Imagem de destaque do post">
        <div>
          <h5><?=$post['titulo']?></h5>
          <p><?=$post['resumo']?></p>
        </div>
      </a>
    
    </article>
  </div>
  <!-- FIM Card -->
  <?php } ?>



</div> <!-- FIM ROW -->


<?php require "inc/rodape.php" ?>