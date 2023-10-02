<?php

$route = strtolower($_GET['param']);

$route = explode('/', $route);

$url = $route[1];

$sql = "SELECT * FROM produtos WHERE href = '$url'";
$exe = $mysqli->query($sql);
$prod = $exe->fetch_array();

$imgs = explode(",", $prod['imagem']);

$categoria = $prod['categoria'];
$id = $prod['id'];
?>

  <title><?php echo $prod['nome']; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta property="og:title" content="<?php echo $prod['nome']?>">
  <meta property="og:description" content="<?php echo $prod['descricao_principal']?>">
  <meta property="og:url" content="https://hypedx.com.br/produto/<?php echo $prod['href']?>">
  <meta property="og:image" content="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>">
  <meta property="product:brand" content="HPDX">
  <meta property="product:availability" content="in stock">
  <meta property="product:condition" content="new">
  <meta property="product:price:amount" content="<?php echo $prod['preco']?>">
  <meta property="product:price:currency" content="BRL">
  <meta property="product:retailer_item_id" content="jewelry_<?php echo $prod['categoria']?>_<?php echo $prod['id']?>">
  <meta property="product:item_group_id" content="fb_jewelry_<?php echo $prod['categoria']?><?php echo $prod['id']?>">

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
    width: 70%;
    text-align: center;
  }

  .product-images {
    display: flex;
    flex-direction: column;
  }
  .principal{
    margin-bottom: 15px;
    cursor: pointer;
    padding: 35px;
  }
  .principal img{
    width: 350px;
    border-radius: 25px;
    box-shadow: 1px 3px 8px rgba(0, 0, 0, 0.2);
  }
  .secondary img{
    width: 150px;
    cursor: pointer;
  }


  .product-info {
    width: 75%;
  }

  .product-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333333;
  }

  .product-description {
    font-size: 24px;
    margin-bottom: 15px;
    color: #666666;
  }

  .product-price {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 15px;
    padding: 15px;
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
    font-size: 24px;
    font-weight: bold;
    color: #333333;
  }

  .variant-options {
    display: flex;
    margin-top: 5px;
  }

  .variant-option {
    display: inline-block;
    padding: 10px 18px;
    font-size: 28px;
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
    padding: 16px 24px;
    font-size: 24px;
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
    padding: 14px 22px;
    font-size: 22px;
    font-weight: bold;
    text-decoration: none;
    color: black;
    background-color: #ffffff;
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
    width: 85%;
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
  a{
    text-decoration: none;
    color: inherit;
  }

</style>


</head>
<body>

<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="HPDX">
  <meta itemprop="name" content="<?php echo $prod['nome']?>">
  <meta itemprop="description" content="<?php echo $prod['descricao_principal']?>">
  <meta itemprop="productID" content="<?php echo $prod['id']?>">
  <meta itemprop="url" content="https://hypedx.com.br/produto/<?php echo $prod['href']?>">
  <meta itemprop="image" content="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>">
  <div itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
    <span itemprop="propertyID" content="jewelry_<?php echo $prod['categoria']?>_<?php echo $prod['id']?>"></span>
    <meta itemprop="value" content="fb_jewelry_<?php echo $prod['categoria']?><?php echo $prod['id']?>"></meta>
  </div>
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
    <link itemprop="availability" href="http://schema.org/InStock">
    <link itemprop="itemCondition" href="http://schema.org/NewCondition">
    <meta itemprop="price" content="<?php echo $prod['preco']?>">
    <meta itemprop="priceCurrency" content="BRL">
  </div>
</div>


<?php
include('src/desktop/components/navigation.html')
?>
<div class="container">
    <div class="product-view">
        <div class="product-images">
            <div class="principal">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>" alt="Product Image 1">
            </div>
          <!-- <div class="secondary">
            <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>" alt="Product Image 2">
            <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]?>" alt="Product Image 3">
          </div> -->

        </div>
        <br>
        <div class="product-info">
          <h2 class="product-title"><?php echo $prod['nome']?></h2>
          <p class="product-description"><?php echo $prod['descricao_principal']?></p>
          <br>
          <br>
          <p class="product-description"><?php echo $prod['descricao_auxiliar']?></p>
          <br>
          <br>
          
          <div class="product-variants">
            <label class="variant-label">Variação:</label>
            <br>
            <br>
            <div class="variant-options">
              <div class="variant-option">Prata</div>
              <div class="variant-option">Ouro</div>
            </div>
          </div>
          
          <br>
          <br>
          <p class="product-price">R$<?php echo $prod['preco']?>,00</p>
          <br>

          <div class="buttons">
            <a href="https://hypedx.com.br/src/desktop/components/add-to-cart.php?id=<?php echo $prod['id']?>" class="cta-button">Comprar Agora</a>
            <a href="https://hypedx.com.br/src/desktop/components/add-to-cart.php?id=<?php echo $prod['id']?>" style="text-decoration:none; color:inherit;"><button class="add-to-cart-button">Adicionar ao Carrinho</button></a>
          </div>

          <br>

        </div>

        <div class="related-products">
        <br>
        <br>

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
