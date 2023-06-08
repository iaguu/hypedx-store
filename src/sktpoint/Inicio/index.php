<!DOCTYPE html>
<?php
    // $query = "SELECT * FROM produtos WHERE label = 'SKTP'";
    // $run = $mysqli->query($query);
?>
<html lang="pt-br">
  <head>
    <title>SktPoint | Início</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../images/logo.jpg">


	<!-- Primary Meta Tags -->
            <meta name="title" content="SktPoint | O Nipe de Qualidade?">
            <meta name="description" content="O seu nipe está aqui! Frete rápido e seguro, preço que cabe no seu bolso. Venha conhecer!">

            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://www.hypedx.com.br/sktpoint/index.php">
            <meta property="og:title" content="SktPoint | O Nipe de Qualidade">
            <meta property="og:description" content="O seu nipe está aqui! Frete rápido e seguro, preço que cabe no seu bolso. Venha conhecer!">
            <meta property="og:image" content="https://www.hypedx.com.br/sktpoint/images/banner.jpeg">

            <!-- Twitter -->
            <meta property="twitter:card" content="summary_large_image">
            <meta property="twitter:url" content="https://www.hypedx.com.br/sktpoint/index.php">
            <meta property="twitter:title" content="SktPoint | O Nipe de Qualidade">
            <meta property="twitter:description" content="O seu nipe está aqui! Frete rápido e seguro, preço que cabe no seu bolso. Venha conhecer!">
            <meta property="twitter:image" content="https://www.hypedx.com.br/sktpoint/images/banner.jpeg">

	</head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="../Inicio">SktPoint<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="Inicio">Início</a></li>
					<li><a href="../Sobre">Sobre</a></li>
					<li><a href="../Catalogo">Catálogo</a></li>
					<li><a href="../Carrinho">Meu Carrinho</a></li>
					<li><a href="../Login">Login</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
			  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Hypedx | All rights reserved | Developed by Guilherme Castello</a>
				<ul>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<div class="hero-wrap js-fullheight" style="background-image: url(../images/bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">
						<div class="img mb-4" style="background-image: url(../images/logo.jpg);"></div>
						<div class="desc">
							<h1 class="mb-4">SktPoint</h1>
							<p class="mb-4">Adquira agora as melhores!</p>
						</div>
					</div>
				</div>
			</div>


			<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Destaques da Semana!</h2>
            <a>Veja todos os produtos aqui.</a>
          </div>
        </div>

		<div class="row">
			<?php
				while ($mostra = $run->fetch_array()){
			?>
			<div class="col-md-4">
				<div class="blog-entry ftco-animate">
						<a href="#" class="img img-2" style="background-image: url('https://hypedx.com.br/Catalogo/images/<?php echo $mostra['img']?>')"></a>
						<div class="text text-2 pt-2 mt-3">
							<span class="category mb-3 d-block"><a href="#"><?php echo ucfirst($mostra['category']) ?></a></span>
							<h3 class="mb-4"><a href="#"><?php echo $mostra['nome'] ?></a></h3>
							<p class="mb-4"><?php echo $mostra['descri'] ?></p>
						</div>
				</div>
			</div>
			<?php
				}
			?>	
	
		</div>

    	</div>
    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    <!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '350203053194266');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=350203053194266&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
  </body>
</html>