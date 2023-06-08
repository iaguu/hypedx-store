<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>HypedX Store - Início</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- Importar a biblioteca jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Importar a biblioteca Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- Primary Meta Tags -->
<title>HypedX — Quanto vale seu estilo?</title>
<meta name="title" content="HypedX — Quanto vale seu estilo?">
<meta name="description" content="A HYPEDX é uma empresa dedicada à criação e comercialização de semijoias de alta qualidade. Nossa missão é oferecer peças exclusivas e elegantes, que realçam a beleza e a sofisticação de quem as usa.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://hypedx.com.br">
<meta property="og:title" content="HypedX — Quanto vale seu estilo?">
<meta property="og:description" content="A HYPEDX é uma empresa dedicada à criação e comercialização de semijoias de alta qualidade. Nossa missão é oferecer peças exclusivas e elegantes, que realçam a beleza e a sofisticação de quem as usa.">
<meta property="og:image" content="https://hypedx.com.br/assets/images/banners/frete.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://hypedx.com.br">
<meta property="twitter:title" content="HypedX — Quanto vale seu estilo?">
<meta property="twitter:description" content="A HYPEDX é uma empresa dedicada à criação e comercialização de semijoias de alta qualidade. Nossa missão é oferecer peças exclusivas e elegantes, que realçam a beleza e a sofisticação de quem as usa.">
<meta property="twitter:image" content="https://hypedx.com.br/assets/images/banners/frete.png">
  <style>
    /* CSS */
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #FFFFFF;
      margin:0 auto;
      padding:0;
    }
    
    h1 {
      color: #014A6E;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #F1A9B4;
      color: white;
      border-radius: 20px;
      text-decoration: none;
    }
    
    
  
  </style>
</head>
<body>




  <!-- Menu de Navegação -->
  <nav>
    <?php
    include('src/mobile/components/navigation.html')
    ?>
  </nav>




  <!-- Banner Principal -->

    <?php
    include('src/mobile/components/banner.html')
    ?>
    <br>
    <br>
    <br>


    <!-- Banner Tarja -->
  
    <?php
      include('src/mobile/components/tarja.html')
      ?>
    <br>
  <!-- Seção de Produtos Mais Vendidos -->

    <?php
    include('src/mobile/components/featured-products.php')
    ?>



<br>




    <br>
    <br>
    <br>
    <hr/>
    <br>



  <!-- Seção de Perguntas Frequentes -->

    <?php
    include('src/mobile/components/faq.html')
    ?>


    <br>
    <br>


  <!-- Seção de Prova Social -->
  <div class="social-proof">
    <?php
    include('src/mobile/components/testimonials.html')
    ?>
  </div>

  <br>
  <br>
    <hr />
  <!-- Seção de Newsletter -->

  <?php
  include('src/mobile/components/news.php')
  ?>

  <!-- Seção de Contato e Resolução de Problemas -->
  <div class="contact">
    <!-- Adicionar informações de contato e formulário de resolução de problemas aqui -->
  </div>

  <!-- Seção do Rodapé -->
    <?php 
        include("src/mobile/components/footer.html")
    ?>
</body>
<script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</script>
</html>
