<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionProduct.php';

    extract($_REQUEST);
    $topProducts = selectTopView();

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