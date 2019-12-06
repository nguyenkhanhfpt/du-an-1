<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionProduct.php';

    extract($_REQUEST);

    $topProducts = selectTopView();
    

    if(array_key_exists('name_product', $_REQUEST)) {
        $products = searchProdcuct($name_product); // Tìm kiếm sản phẩm
    }
    else{
        $products = orderDefault();
    }

    $view_name = 'view.php';
    
    require '../layout.php';

?>