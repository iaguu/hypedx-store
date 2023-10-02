
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.5;
      padding: 20px;
      margin: 0 auto;
      padding:0;
    }
    .container{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      align-self: center;
      padding: 10px;
    }
    .policys{
      max-width: 600px;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    
    h2 {
      margin-top: 30px;
    }
    
    p {
      margin-bottom: 10px;
    }
    
    ul {
      list-style-type: disc;
      margin-left: 20px;
      list-style-type: decimal;
      margin-left: 20px;

    }
    
    li {
      margin-bottom: 5px;
      padding-left: 20px;
    }
  </style>
</head>

<body>

    <?php
    include('src/desktop/components/navigation.html')
    ?>

<div class="container">
  <div class="policys">
<br>
<br>
<br>
<h1>Sobre</h1>
<br>
<br>
<h2>Sobre Nossa Empresa</h2>
<br>
<br>

<p>A HYPEDX é uma empresa dedicada à criação e comercialização de semijoias de alta qualidade. 
    Nossa missão é oferecer peças exclusivas e elegantes, que realçam a beleza e a sofisticação de quem as usa.</p>
    <br>
    <br>

<p>Visamos ser referência no mercado de semijoias, proporcionando aos nossos clientes produtos de excelência, sempre atentos às últimas tendências da moda.
     Acreditamos que cada detalhe faz a diferença, e é por isso que nossas peças são cravejadas com zircônia e banhadas a prata ou ouro, garantindo brilho,
      durabilidade e estilo incomparáveis.</p>
<br>
<br>
<p>Em nosso catálogo, você encontrará uma ampla variedade de colares, brincos, pulseiras e anéis, projetados para se destacarem em qualquer ocasião.
     Nossas semijoias são cuidadosamente elaboradas, combinando design único e materiais de alta qualidade.</p>

<p>Na HYPEDX, acreditamos que a beleza está nos detalhes, e nossas semijoias são o toque perfeito para expressar sua personalidade e estilo.
     Explore nossa coleção e permita-se brilhar com peças deslumbrantes que vão além das expectativas.</p>
     <br>
     <br>

  </div>  
    <?php
    include('src/desktop/components/faq.html')
    ?>

</div>
<br>
<br>
<?php
include('src/desktop/components/footer.html')
?>
</body>

</html>
