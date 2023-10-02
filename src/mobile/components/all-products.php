
<div style="display:none;" id="all-prods">

<div  class="products">
<h1>TODOS OS PRODUTOS</h1>
  <div class="product-carousel">

  <?php      
    $query = "SELECT * FROM produtos WHERE (marca = 'hpdx' OR marca = 'hyped') AND destaque = 'geral' ORDER BY id DESC;";
    $run = $mysqli->query($query);
    $row = mysqli_num_rows($run);    

    while ($produto = $run->fetch_array()):
    
    $imgs = explode(",", $produto['imagem']);

  ?>
<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ?>">
    <div class="product-box">
      <img width="160" height="160" loading="lazy" src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="Produto 1">
      <div class="product-infos">
        <h2><?php echo $produto['nome'] ?></h2>
        <p><?php echo $produto['descricao_principal'] ?></p>
      </div>
    </div>
</a>
    <?php endwhile ?> 
  </div>
</div>
</div>

<div class="button-role">
        <a class="button-see-more" href="javascript:$('#all-prods').slideDown(300); $('.button-role').hide(100);">Ver mais</a>
    </div>