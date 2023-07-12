<!DOCTYPE html>
<html>
<head>
  <title>Visualização de Produto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
  body {
    background-color: #f0f0f0;
    margin: 0 auto;
  }
  .container{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 50px;
    flex-direction: column;
  }
  .product-view {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    padding: 30px;
    border: 1px solid #e0e0e0;
    background-color: #ffffff;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    width: 95%;
    text-align: center;
  }

  .product-images {
    display: flex;
    flex-direction: column;
  }
  .principal img{
    width: 300px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    cursor: pointer;
  }
  .secondary img{
    width: 150px;
    cursor: pointer;
  }


  .product-info {
    width: 75%;
  }

  .product-title {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333333;
  }

  .product-description {
    font-size:28px;
    margin-bottom: 15px;
    color: #666666;
  }

  .product-price {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 15px;
    color: black;
  }

  .product-variants {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-bottom: 15px;
  }

  .variant-label {
    font-size: 22px;
    font-weight: bold;
    color: #333333;
  }

  .variant-options {
    display: flex;
    margin-top: 5px;
  }

  .variant-option {
    display: inline-block;
    padding: 8px 15px;
    font-size: 18px;
    color: #ffffff;
    background-color: #333333;
    border-radius: 20px;
    margin-right: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .variant-option:hover {
    background-color: #555555;
  }

  .buttons {
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 100%;
  }

  .cta-button {
    display: inline-block;
    padding: 18px 28px;
    font-size: 32px;
    font-weight: bold;
    text-decoration: none;
    color: #ffffff;
    background-color: #333333;
    border-radius: 30px;
    transition: background-color 0.3s ease;
    animation: pulse 1.5s infinite;
  }

  .cta-button:hover {
    background-color: black;
    animation: none;
  }

  .add-to-cart-button {
    display: inline-block;
    padding: 16px 24px;
    font-size: 26px;
    font-weight: bold;
    text-decoration: none;
    color: black;
    background-color: #ffffff;
    border-radius: 30px;
    transition: background-color 0.3s ease;
    margin-top: 50px;
    cursor: pointer;
  }

  .add-to-cart-button:hover {
    background-color: #555555;
  }

  .related-products {
    margin-top: 50px;
    border-top: 1px solid gray;
    width: 95%;
  }

  .related-products h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #333333;
  }

  .related-products .product-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid whitesmoke;
    padding: 20px;
  }

  .related-products .product-item img {
    width: 120px;
    margin-right: 10px;
    border-radius: 5px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
  }
  .related-products h3{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif 
  }
  .related-products .related-product-title {
    font-size: 16px;
    color: #333333;
  }
  .related-products .related-product-price {
    font-size: 14px;
    color: green;
  }
  .related-infos{
    display: flex;
    flex-direction: column;
    margin-left: 20px;
  }
  .product-item{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  @keyframes pulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
    100% {
      transform: scale(1);
    }
  }
</style>

</head>
<body>
<?php

$route = strtolower($_GET['param']);

$route = explode('/', $route);

$url = $route[1];

$sql = "SELECT * FROM produtos WHERE href = '$url'";
$exe = $mysqli->query($sql);
$prod = $exe->fetch_array();

$imgs = explode(",", $prod['imagem']);

?>
<?php
include('src/mobile/components/navigation.html')
?>
<div class="container">
    <div class="product-view">
        <div class="product-images">
        <div class="principal">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>" alt="Product Image 1">
            </div>
          <div class="secondary">
            <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>" alt="Product Image 2">
            <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>" alt="Product Image 3">
          </div>

        </div>
        <br>
        <div class="product-info">
          <h2 class="product-title"><?php echo $prod['nome']?></h2>
          <p class="product-description"><?php echo $prod['descricao_principal']?></p>
          <p class="product-price">R$<?php echo $prod['preco']?>,00</p>
          <br>
          <br>

          <div class="product-variants">
            <label class="variant-label">Variação:</label>
            <div class="variant-options">
              <div class="variant-option">Prata</div>
              <div class="variant-option">Ouro</div>
            </div>
          </div>

          <br>
          <br>
          <br>

          <div class="buttons">
            <a href="https://hypedx.com.br/src/mobile/components/add-to-cart.php?id=<?php echo $prod['id']?>" class="cta-button">Comprar Agora</a>
            <a href="https://hypedx.com.br/src/mobile/components/add-to-cart.php?id=<?php echo $prod['id']?>" style="text-decoration:none; color:inherit;"><button class="add-to-cart-button">Adicionar ao Carrinho</button></a>
          </div>


          <br>

        </div>

        <div class="related-products">
        <br>
        <br>

            <h3>Você também pode gostar:</h3>
            <br>
            <br>

            <?php      
              $query = "SELECT * FROM produtos WHERE categoria = '$categoria' AND id <> '$id' ORDER BY id DESC";
              $run = $mysqli->query($query);
              $row = mysqli_num_rows($run);    
          
              while ($produto = $run->fetch_array()):
              
              $imgs = explode(",", $produto['imagem']);
        
            ?>

              <a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ?>">
                <div class="product-item">
                  <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0] ?>" alt="Related Product 1">
                    <div class="related-infos">

                    <p class="related-product-title"><?php echo $produto['nome'] ?></p>
                    <p class="related-product-price">R$<?php echo $produto['preco'] ?>,00</p>
                  </div>
                </div>
              </a>

            <?php endwhile ?> 

          </div>
      </div>
</div>
<div class="container">
<?php
include('src/mobile/components/tarja.html')
?>
<br>
<br>
<?php
include('src/mobile/components/testimonials.html')
?>
</div>
<br>
<br>
<?php
include('src/mobile/components/footer.html')
?>
</body>
</html>
