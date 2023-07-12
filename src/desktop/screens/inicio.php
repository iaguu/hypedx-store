
  <meta charset="UTF-8">
  <title>HypedX Store - Início</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- Importar a biblioteca jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Importar a biblioteca Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


<script src="https://kit.fontawesome.com/b37cf30113.js" crossorigin="anonymous"></script>

  <style>
              ::-webkit-scrollbar {
                width: 10px;
              }
              
              ::-webkit-scrollbar-track {
                background: #f1f1f1; 
              }
               
              ::-webkit-scrollbar-thumb {
                background: #888; 
              }
              
              ::-webkit-scrollbar-thumb:hover {
                background: #555; 
              }
    html{
      scroll-behavior: smooth;
    }
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
    include('src/desktop/components/navigation.html')
    ?>
  </nav>




  <!-- Banner Principal -->

    <?php
    include('src/desktop/components/banner.html')
    ?>
    <br>
    <br>
    <br>


    <!-- Banner Tarja -->
  
    <?php
      include('src/desktop/components/tarja.html')
      ?>
    <br>
  <!-- Seção de Produtos Mais Vendidos -->

    <?php
    include('src/desktop/components/featured-products.php')
    ?>



<br>




    <br>
    <br>
    <br>
    <hr/>
    <br>



  <!-- Seção de Perguntas Frequentes -->

    <?php
    include('src/desktop/components/faq.html')
    ?>


    <br>
    <br>


  <!-- Seção de Prova Social -->
  <div class="social-proof">
    <?php
    include('src/desktop/components/testimonials.html')
    ?>
  </div>

  <br>
  <br>
    <hr />
  <!-- Seção de Newsletter -->

  <?php
  include('src/desktop/components/news.php')
  ?>

  <!-- Seção de Contato e Resolução de Problemas -->
  <div class="contact">
    <!-- Adicionar informações de contato e formulário de resolução de problemas aqui -->
  </div>

  <!-- Seção do Rodapé -->
    <?php 
        include("src/desktop/components/footer.html")
    ?>


<a class="mobile-hide" href="https://wa.me/5511911372596?text=Poderiam%20me%20ajudar?" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
        z-index:1000;" target="_blank">
            <i style="margin-top:16px" class="fa fa-whatsapp"></i>
      </a>

</body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
      document.addEventListener('touchstart', onTouchStart, {passive: true});
    </script>

</html>
