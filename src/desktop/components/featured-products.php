<style>
  .products {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
    flex-direction: column;
    padding: 50px;
  }
  .products h1{
    font-size: 26px;
    padding: 20px;
  }
  .product-carousel {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
  }

  .product-box {
    background-color: white;
    border: 1px solid whitesmoke;
    border-radius: 15px;
    width: 200px;
    height: 200px;
    margin: 10px;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s ease;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
    cursor:pointer;
  }

  .product-box:hover {
    transform: scale(1.05);
  }

  .product-box img {
    max-width: 70%;
    max-height: 70%;
    padding: 10px;
    border-radius: 25px;
  }

  .product-box h2 {
    font-size: 14px;
    margin-bottom: 5px;
  }

  .product-box p {
    font-size: 12px;
    margin-bottom: 10px;
  }

  .button-role{
    display: flex;
    justify-self: center;
    align-items: center;
    justify-content: center;
    align-self: center;
    text-align: center;
    padding: 5px;
  }

  .button-see-more {
    text-decoration: none;
    background-color: white;
    border: 2px solid #333;
    color: #000000;
    padding: 18px;
    border-radius: 18px;
    font-size: 18px;
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin: 5px;
  }

  .button-see-more:hover {
    background-color: #333;
    color: white;
  }
</style>

<div class="products">
<h1>COLEÇÃO EM DESTAQUE</h1>
  <div class="product-carousel">
    <div class="product-box">
      <img src="../assets/images/products/produto1.jpg" alt="Produto 1">
      <h2>Nome do Produto 1</h2>
      <p>Descrição do Produto 1</p>
    </div>
    <div class="product-box">
      <img src="../assets/images/products/produto2.jpg" alt="Produto 2">
      <h2>Nome do Produto 2</h2>
      <p>Descrição do Produto 2</p>
    </div>
    <div class="product-box">
      <img src="../assets/images/products/produto3.jpg" alt="Produto 3">
      <h2>Nome do Produto 3</h2>
      <p>Descrição do Produto 3</p>
    </div>
    <div class="product-box">
      <img src="../assets/images/products/produto4.jpg" alt="Produto 4">
      <h2>Nome do Produto 4</h2>
      <p>Descrição do Produto 4</p>
    </div>
    <div class="product-box">
      <img src="../assets/images/products/produto5.jpg" alt="Produto 4">
      <h2>Nome do Produto 5</h2>
      <p>Descrição do Produto 4</p>
    </div>
    <div class="product-box">
      <img src="../assets/images/products/produto6.jpg" alt="Produto 4">
      <h2>Nome do Produto 6</h2>
      <p>Descrição do Produto 4</p>
    </div>
    <div class="product-box">
      <img src="../assets/images/products/produto6.jpg" alt="Produto 4">
      <h2>Nome do Produto 4</h2>
      <p>Descrição do Produto 4</p>
    </div>
    <div class="product-box">
      <img src="../assets/images/products/produto6.jpg" alt="Produto 4">
      <h2>Nome do Produto 4</h2>
      <p>Descrição do Produto 4</p>
    </div>

  </div>
</div>

<div class="button-role">
        <a class="button-see-more" href="">Ver mais</a>
    </div>