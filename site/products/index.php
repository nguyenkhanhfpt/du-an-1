<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionProduct.php';
    require '../../DAO/functionKindProduct.php';

    extract($_REQUEST);

    $topProducts = selectTopView();
    $kindProducts = selectNumberKindInProduct(); // select loại sản phẩm
    

    if(array_key_exists('name_product', $_REQUEST)) {
        $products = searchProdcuct($name_product); // Tìm kiếm sản phẩm
    }

    else if(array_key_exists('filter', $_REQUEST)) {
        $products = searchProdcuctWithKind($kind_product); // Lọc sản phẩm theo loại hàng
    }

    else{
        $products = orderDefault();
    }

    $view_name = 'view.php';
    
    require '../layout.php';

?>