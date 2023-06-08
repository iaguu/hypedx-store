<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Políticas</title>
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
<h1>Políticas</h1>
<br>
<br>
  
<h2>Política de Frete</h2>
<p>Nossa política de frete estabelece as diretrizes para o envio e entrega dos produtos adquiridos em nossa loja online. Confira as informações importantes sobre prazos, custos e regiões atendidas:</p>
<ul>
  <li>Os prazos de entrega podem variar de acordo com a região e a modalidade de envio escolhida.</li>
  <li>Os custos de frete serão calculados automaticamente durante o processo de compra.</li>
  <li>Realizamos entregas para todo o território nacional.</li>
  <li>Após a confirmação do pagamento, seu pedido será processado e enviado dentro de 15 dias úteis.</li>
  <li>Em caso de dúvidas ou problemas com o frete, entre em contato com nossa equipe de suporte.</li>
</ul>
  <br>
  <br>
  
  <h2>Política de Privacidade</h2>
<p>Respeitamos sua privacidade e estamos comprometidos em proteger os dados pessoais que você compartilha conosco. Nossa política de privacidade detalha como coletamos, utilizamos, armazenamos e protegemos suas informações:</p>
<ul>
  <li>Coletamos apenas as informações necessárias para processar seus pedidos e melhorar sua experiência de compra.</li>
  <li>Garantimos que suas informações serão tratadas de forma confidencial e não serão compartilhadas com terceiros, exceto quando necessário para fins operacionais.</li>
  <li>Utilizamos medidas de segurança para proteger seus dados contra acesso não autorizado.</li>
  <li>Você pode solicitar a exclusão de seus dados pessoais a qualquer momento.</li>
  <li>Para mais detalhes, consulte nossa política de privacidade completa.</li>
</ul>
  <br>
  <br>
  
  <h2>Política de Cookies</h2>
<p>Nosso site utiliza cookies para melhorar sua experiência e fornecer serviços personalizados. Ao utilizar nosso site, você concorda com o uso de cookies conforme descrito abaixo:</p>
<ul>
  <li>Utilizamos cookies para lembrar suas preferências de navegação e personalizar o conteúdo exibido.</li>
  <li>Os cookies nos ajudam a analisar o tráfego do site e entender como os usuários interagem com nosso conteúdo.</li>
  <li>Podemos utilizar cookies de terceiros para fins de publicidade direcionada.</li>
  <li>Você pode controlar o uso de cookies nas configurações do seu navegador.</li>
  <li>Para obter mais informações sobre como utilizamos cookies, consulte nossa política de cookies completa.</li>
</ul>
  <br>
  <br>
  
  <h2>Termos e Condições</h2>
<p>Os termos e condições a seguir estabelecem as regras para o uso de nosso site e a realização de compras em nossa loja online:</p>
<ul>
  <li>Ao utilizar nosso site, você concorda em cumprir todas as leis e regulamentações aplicáveis.</li>
  <li>Você é responsável por fornecer informações precisas e atualizadas durante o processo de compra.</li>
  <li>Nos reservamos o direito de cancelar pedidos em caso de informações incorretas, suspeita de fraude ou violação dos termos e condições.</li>
  <li>Os preços e estoques estão sujeitos a alterações sem aviso prévio.</li>
  <li>Para mais informações sobre nossos termos e condições, consulte a página completa dedicada a este assunto.</li>
</ul>
  <br>
  <br>
  
  <h2>Contato</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat leo in turpis placerat, at condimentum purus posuere.</p>
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
