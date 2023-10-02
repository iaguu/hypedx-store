<style>

.hidden-content{
    display: none;

    margin: 0 auto;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
}

#kits{
    display: none;
}
#relogios{
    display: none;
}
#promos{
    display: none;
}
#pingentes{
    display: none;
}
#pulseiras{
    display: none;
}
#brincos{
    display: none;
}
#aneis{
    display: none;
}
#colares{
    display: none;
}
.products-label{
    display: grid;

    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(4, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;

    padding: 30px;

    flex-direction: column;

    align-self: center;
    text-align: center;
}
.products-label a{
    text-decoration: none;
    color: inherit;
}

.product-label{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;

    width: 65%;
    height: 55%;
    
    padding: 55px;
    margin: 50px;

    background-color: white;

    border: 1px solid whitesmoke;
    border-radius: 15px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);

    transition: transform 0.3s ease;

    cursor: pointer;
}
.product-label:hover {
    transform: scale(1.05);
  }
.product-label img{
    width: 45%;
    border-radius: 20px;
    margin-top: 15px;
}
.product-label h2{}
.product-label h4{}
.product-label p{}
</style>

<div id="hidden" class="hidden-content">

    <div class="hundred">
    <div id="colares">
            <h1>Colares</h1>
            <div class="products-label">



            <?php
                $query = "SELECT * FROM produtos WHERE preco < 150 ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>
<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>
        <div id="colares">
            <h1>Colares</h1>
            <div class="products-label">



            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'colar' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>
<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

        <div id="kits">
            <h1>Kits</h1>
            <div class="products-label">


            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'kit' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>

<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

        <div id="pingentes">
            <h1>Pingentes</h1>
            <div class="products-label">

            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'pingentes' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>

<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

        <div id="brincos">
            <h1>Brincos</h1>
            <div class="products-label">

            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'brinco' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>

<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

        <div id="pulseiras">
            <h1>Pulseiras</h1>
            <div class="products-label">


            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'pulseira' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>

<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

        <div id="relogios">
        <h1>Relógios</h1>
            <div class="products-label">

            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'relogios' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>

<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

        <div id="aneis">
            <h1>Anéis</h1>
            <div class="products-label">

            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'aneis' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>

<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>

            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

        <div id="promos">
            <h1>Promoções</h1>
            <div class="products-label">


            <?php
                $query = "SELECT * FROM produtos WHERE categoria = 'promocoes' ORDER BY id DESC";
                $run = $mysqli->query($query);
                $row = mysqli_num_rows($run);    

                while ($produto = $run->fetch_array()):
                
                $imgs = explode(",", $produto['imagem']);

            ?>

<a href="https://hypedx.com.br/produto/<?php echo $produto['href'] ;?>">       
     <div class="product-label">
                <img src="https://hpdx.hypedx.com.br/assets/images/products/<?php echo $imgs[0]; ?>" alt="">
                <h2><?php echo $produto['nome']; ?></h2>
                <h4><?php echo $produto['descricao_principal']; ?></h4>
                <p>R$<?php echo $produto['preco']; ?>,00</p>
            </div>


            <?php 
            endwhile;
            ?>

            </div>
</a>
        </div>

    </div>

</div>