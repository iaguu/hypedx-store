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
    width: 50%;
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
    width: 70%;
  }

  .product-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333333;
  }

  .product-description {
    margin-bottom: 15px;
    color: #666666;
  }

  .product-price {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #ff6600;
  }

  .product-variants {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-bottom: 15px;
  }

  .variant-label {
    font-size: 16px;
    font-weight: bold;
    color: #333333;
  }

  .variant-options {
    display: flex;
    margin-top: 5px;
  }

  .variant-option {
    display: inline-block;
    padding: 5px 10px;
    font-size: 14px;
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
  }

  .cta-button {
    display: inline-block;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    color: #ffffff;
    background-color: #ff6600;
    border-radius: 30px;
    transition: background-color 0.3s ease;
    animation: pulse 1.5s infinite;
  }

  .cta-button:hover {
    background-color: #ff4500;
    animation: none;
  }

  .add-to-cart-button {
    display: inline-block;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    color: #ffffff;
    background-color: #333333;
    border-radius: 30px;
    transition: background-color 0.3s ease;
    margin-top: 15px;
    cursor: pointer;
  }

  .add-to-cart-button:hover {
    background-color: #555555;
  }

  .related-products {
    margin-top: 50px;
    border-top: 1px solid gray;
    width: 60%;
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


?>
<?php
include('src/desktop/components/navigation.html')
?>
<div class="container">
    <div class="product-view">
        <div class="product-images">
            <div class="principal">
                <img src="../assets/images/products/produto1.jpg" alt="Product Image 1">
            </div>
          <div class="secondary">
            <img src="../assets/images/products/produto1.jpg" alt="Product Image 2">
            <img src="../assets/images/products/produto1.jpg" alt="Product Image 3">
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
              <div class="variant-option">Opção 1</div>
              <div class="variant-option">Opção 2</div>
              <div class="variant-option">Opção 3</div>
            </div>
          </div>

          <br>
          <br>
          <br>

          <div class="buttons">
            <a href="#" class="cta-button">Comprar Agora</a>
            <button class="add-to-cart-button">Adicionar ao Carrinho</button>
          </div>

          <br>

        </div>

        <div class="related-products">
        <br>
        <br>

            <h3>Você também pode gostar:</h3>
            <br>
            <br>

            <div class="product-item">
              <img src="../assets/images/products/produto2.jpg" alt="Related Product 1">
              <div class="related-infos">

              <p class="related-product-title">Produto Relacionado 1</p>
              <p class="related-product-price">R$30,00</p>
            </div>
        </div>
            <div class="product-item">
              <img src="../assets/images/products/produto3.jpg" alt="Related Product 2">
              <div class="related-infos">
              <p class="related-product-title">Produto Relacionado 2</p>
              <p class="related-product-price">R$30,00</p>
            </div>
            </div>
            <div class="product-item">
              <img src="../assets/images/products/produto4.jpg" alt="Related Product 3">
              <div class="related-infos">

              <p class="related-product-title">Produto Relacionado 3</p>
              <p class="related-product-price">R$30,00</p>
            </div>
        </div>
          </div>
      </div>
</div>
<div class="container">
<?php
include('src/desktop/components/tarja.html')
?>
<br>
<br>
<?php
include('src/desktop/components/testimonials.html')
?>
</div>
<br>
<br>
<?php
include('src/desktop/components/footer.html')
?>
</body>
</html>
