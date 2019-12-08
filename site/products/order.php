<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionProduct.php';
    require '../../DAO/functionKindProduct.php';

    extract($_REQUEST);
    $topProducts = selectTopView();
    $kindProducts = selectNumberKindInProduct(); // select loại sản phẩm

    if(array_key_exists('order', $_REQUEST)){
        if($order == 'new') {
            $products = selectProducts();
        }
        else if($order == 'default') {
            $products = orderDefault();
        }
        else if($order == 'viewest'){
            $products =  orderView();
        }
        else if($order == 'lowestPrice'){
            $products =  orderLowestPrice();
        }
        else if($order == 'highestPrice'){
            $products =  orderHighPrice();
        }
        $view_name = 'view.php';
    }
        
    require '../layout.php';

?>