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
    include('src/desktop/componentsfeatured-products.php')
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
</body>
<script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</script>
</html>
