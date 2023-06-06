<?php
$route = strtolower($_GET['param']);

if($route == null){
    include('src/desktop/screens/inicio.php');
}else{
    if($route == 'politicas'){
        include('src/desktop/screens/policys.php');
    }
    if($route == 'produto'){
        include('src/desktop/screens/product-details.php');
    }
    if($route == 'categorias'){
        include('src/desktop/screens/categorys.php');
    }
}
?>