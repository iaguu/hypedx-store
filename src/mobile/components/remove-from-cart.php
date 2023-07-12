<?php

@session_start();

$id = $_GET['id'];

$products = $_SESSION['cartProds']; 
$productsqnt = $_SESSION['cartQnt']; 
$productstam = $_SESSION['cartTam'];

    $a = explode(",", $products);
    $b = explode(",", $productsqnt);
    $c = explode(",", $productstam);

for ($i = 0; $i < sizeof($a); $i++){
    if($a[$i] == $id){
        $index = $i;
    }
}

    unset($a[$index]);
    unset($b[$index]);
    unset($c[$index]);

$products = implode(",", $a);
$productsqnt = implode(",", $b);
$productstam = implode(",", $c);

if($products == null){

    unset($_SESSION['cartProds']);
    unset($_SESSION['cartQnt']);
    unset($_SESSION['cartTam']);

}else{

$_SESSION['cartProds'] = $products;
$_SESSION['cartQnt'] = $productsqnt;
$_SESSION['cartTam'] = $productstam;

}

header('Location: https://hypedx.com.br/carrinho');

?>