<?php
if($_SESSION['validation-token'] == 'HPDXSTORE'):
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>

    .container{
        display:flex;
        justify-content: center;
        align-items: center;
    }
  .admin-panel {
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 5px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
  }

  h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="number"],
  textarea,
  select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #cccccc;
    border-radius: 5px;
  }

  .submit-button {
    display: inline-block;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    color: #ffffff;
    background-color: #ff6600;
    border: none;
    border-radius: 30px;
    text-align: center;
    transition: background-color 0.3s ease;
    cursor: pointer;
  }

  .submit-button:hover {
    background-color: #ff4500;
  }
</style>

</head>
<body>
<div class="container">
<div class="admin-panel">
  <h2>Adicionar Produto</h2>
  <form action="src/painel/logged/actions.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="product-name">Nome do Produto</label>
      <input type="text" id="product-name" name="product-name" required>
    </div>
    <div class="form-group">
      <label for="product-description">Descrição Principal</label>
      <textarea id="product-description" name="product-description" required></textarea>
    </div>
    <div class="form-group">
      <label for="product-short-description">Descrição Curta</label>
      <textarea id="product-short-description" name="product-short-description" required></textarea>
    </div>
    <div class="form-group">
      <label for="product-price">Preço</label>
      <input type="number" id="product-price" name="product-price" required>
    </div>
    <div class="form-group">
      <label for="product-category">Categoria</label>
      <select id="product-category" name="product-category" required>
        <option value="">Selecione...</option>
        <option value="colar">Colar</option>
        <option value="brinco">Brinco</option>
        <option value="pulseira">Pulseira</option>
        <option value="kit">Kit</option>
        <option value="relógios">Relógios</option>
        <option value="anéis">Anéis</option>
        <option value="promoções">Promoções</option>
        <option value="pingentes">Pingentes</option>
      </select>
      <br>
      <br>
      <br>
      <label for="product-image">Imagem:</label>
      <input type="file" name="product-image" id="product-image" required>
    </div>
    <button type="submit" class="submit-button">Adicionar Produto</button>
  </form>
</div>
</div>
</body>
</html>
<?php
endif;
?>