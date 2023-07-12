<style>
  .products {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
    flex-direction: column;
    padding: 30px;
    margin-top: 50px;
  }
  .products h1{
    font-size: 26px;
    padding: 20px;
  }
  .product-carousel {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    margin-top: 50px;
    margin-bottom:50px;
  }

  .product-box {
    background-color: white;
    border: 1px solid whitesmoke;
    border-radius: 15px;
    width: 250px;
    height: 230px;
    margin: 10px;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s ease;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
    cursor:pointer;
  }
  .product-infos{
    height:fit-content;
    width: fit-content;
    margin-bottom: 50px;
    margin-top:-35px;
  }
  .product-infos p{
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   line-height: 16px;    
   max-height: 50px;     
   -webkit-line-clamp: 3; 
   -webkit-box-orient: vertical;
  }
  .product-box:hover {
    transform: scale(1.05);
  }

  .product-box img {
    max-width: 70%;
    max-height: 70%;
    padding: 10px;
    border-radius: 25px;
    margin-bottom: 50px;
  }

  .product-box h2 {
    font-size: 14px;
    margin-bottom: 5px;
  }


  .button-role{
    display: flex;
    justify-self: center;
    align-items: center;
    justify-content: center;
    align-self: center;
    text-align: center;
    padding: 5px;
  }

  .button-see-more {
    text-decoration: none;
    background-color: white;
    border: 2px solid #333;
    color: #000000;
    padding: 18px;
    border-radius: 18px;
    font-size: 18px;
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin: 5px;
  }

  .button-see-more:hover {
    background-color: #333;
    color: white;
  }
  a{
    text-decoration: none;
    color: inherit;
  }
</style>

<div class="products">
<h1>COLEÇÃO EM DESTAQUE</h1>
  <div class="product-carousel">

  <?php      
    $query = "SELECT * FROM produtos WHERE destaque = 'principal' ORDER BY id DESC";
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

<div class="button-role">
        <a class="button-see-more" href="../categorias">Ver mais</a>
    </div>