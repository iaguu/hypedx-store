
    <title>Status da Compra</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    
const mp = new MercadoPago('APP_USR-04d5082e-e04f-4f36-b653-399b71195c54');
const bricksBuilder = mp.bricks();

</script>
<style>
    body{
        margin: 0 auto;
    }
    .pay-status{
        display: flex;
        justify-content: center;
        align-items: center;
        justify-self: center;
        align-self: center;
        margin-top:3%;
        padding:130px;
    }
</style>
</head>
<body>
<?php
    include('src/mobile/components/navigation.html');
?>
<?php
$route = explode('/', $_GET['param']);
$id = $route[1];
?>
<div class="pay-status">
    <div style="width:600px !important;" id="statusScreenBrick_container"></div>
</div>
<script>
    
const renderStatusScreenBrick = async (bricksBuilder) => {
 const settings = {
    locale: 'pt-BR',
   initialization: {
     paymentId: '<?php echo $id; ?>', // id do pagamento a ser mostrado
   },
   callbacks: {
     onReady: () => {
       /*
         Callback chamado quando o Brick estiver pronto.
         Aqui você pode ocultar loadings do seu site, por exemplo.
       */
     },
     onError: (error) => {
       // callback chamado para todos os casos de erro do Brick
       console.error(error);
     },
   },
  };
  window.statusScreenBrickController = await bricksBuilder.create(
   'statusScreen',
   'statusScreenBrick_container',
   settings,
  );  
};
renderStatusScreenBrick(bricksBuilder);

</script>
<?php
    include('src/mobile/components/footer.html');
?>
</body>
</html>