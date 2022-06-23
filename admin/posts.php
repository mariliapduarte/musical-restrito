<?php 
require "../inc/funcoes-posts.php";
require "../inc/cabecalho-admin.php"; 



$posts = lerPosts($conexao, $_SESSION['id'], $_SESSION['tipo']);
$quantidade = count($posts);

?>      
    
<div class="conteudo limitador">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Comunicado <span class="badge badge-primary"><?= $quantidade ?></span></h2>
    <p class="lead text-right">
      <a class="btn btn-primary" href="post-insere.php">Inserir novo comunicado</a>
    </p>
            
    <div class="table-responsive"> 

      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th>Título</th>
            <th>Data</th>
            
            <?php if($_SESSION['tipo'] == 'admin'){ ?> <!-- mostrar autor somente se for admin, afinal o autor só vê seus próprios posts -->
            <th>Autor</th>
            <?php } ?>
            
            <th colspan="2" class="text-center">Operações</th>
          </tr>
        </thead>
      
        <tbody>

  <?php foreach( $posts as $post ) { ?>

    <tr>
      <td> <?=$post['titulo']?> </td>
      <td> <?=formataData($post['data'])?> </td>

      <?php if($_SESSION['tipo'] == 'admin'){ ?> <!-- mostrar autor somente se for admin, afinal o autor só vê seus próprios posts -->
      <td> <?=$post['autor']?> </td>
      <?php } ?>

      <td class="text-center">
          <a class="btn btn-warning btn-sm" 
            href="post-atualiza.php?id=<?=$post['id']?>"> 
            Atualizar
          </a>
      </td>
      <td class="text-center">
          <a class="btn btn-danger btn-sm excluir" 
            href="post-exclui.php?id=<?=$post['id']?>">
            Excluir
          </a>
      </td>
    </tr>

<?php } ?>
        </tbody>                
      </table>
      
    </div>
  </article>
</div>
     

<?php require "../inc/rodape-admin.php"; ?> 