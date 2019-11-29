<?php 
    require '../global.php';
    require '../DAO/functionProduct.php';
    $products = selectProducts();

    if(array_key_exists('login', $_REQUEST)) {
        $view_name = 'components/login.php';
    }
    
    else if(array_key_exists('signin', $_REQUEST)) {
        $view_name = 'components/signin.php';
    }
    
    else{
        $view_name = 'home.php';
    }

    require 'layout.php';
?>
