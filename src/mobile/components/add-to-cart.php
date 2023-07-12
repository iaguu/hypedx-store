<?php
    @session_start();

    $id = $_GET['id'];

    $qnt = 1;
    
    $tama = 'padrao';

    if(isset($_SESSION['cartProds'])){
        $products = $_SESSION['cartProds'];
    }else{
        $products = '';
    }

    if(isset($_SESSION['cartQnt'])){
        $productsqnt = $_SESSION['cartQnt'];
    }else{
        $productsqnt = '';
    }

    if(isset($_SESSION['cartTam'])){
        $productstam = $_SESSION['cartTam'];
    }else{
        $productstam = '';
    }


    $products = $products .  $id . ',';
    $productsqnt = $productsqnt . $qnt . ',';
    $productstam = $productstam . $tama . ',';

    $_SESSION['cartProds'] = $products;
    $_SESSION['cartQnt'] = $productsqnt;
    $_SESSION['cartTam'] = $productstam;
    

    header('Location: https://hypedx.com.br/carrinho');
?>