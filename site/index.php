<?php 
    session_start();
    require '../global.php';
    require '../DAO/functionProduct.php';
    $products = selectProducts();

    $message = '';
    $err = '';

    extract($_REQUEST);

    if(array_key_exists('login', $_REQUEST)) {
        $view_name = 'components/login.php';
    }

    else if(array_key_exists('viewProduct', $_REQUEST)) {
        updateViewProduct($id_product);
        $relatedProducts = selectProductsLimit();
        $viewProduct = selectProduct($id_product);
        $view_name = 'components/viewProduct.php';
    }
    
    else if(array_key_exists('signin', $_REQUEST)) {
        $view_name = 'components/signin.php';
    }

    else if(array_key_exists('successSignin', $_REQUEST)) {
        $view_name = 'components/signin.php';
        $message = "Đăng ký thành công!";
    }

    else if(array_key_exists('successLogin', $_REQUEST)) {
        $view_name = 'components/login.php';
        $message = "Đăng nhập thành công!";
    }

    else if(array_key_exists('falseLogin', $_REQUEST)) {
        $view_name = 'components/login.php';
        $err = "Đăng nhập thất bại!";
    }

    else if(array_key_exists('submitComment', $_REQUEST)) {
        
    }
    
    else{
        $view_name = 'home.php';
    }

    require 'layout.php';
?>
