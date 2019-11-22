<?php
    require '../../global.php';
    require '../../DAO/functionProduct.php';

    $message = '';
    extract($_REQUEST);

    if(array_key_exists('viewAddProduct', $_REQUEST)) {
        $view_name = 'viewAddProduct.php';
    }
    else if(array_key_exists('addNewProduct', $_REQUEST)) {
        $img_product = save_file("img", $DIR_IMG);
        insertProduct($name_product, $price_product, $sale, $kind_product, $img_product, $description);
        $message = 'Thêm mới thành công!';
        $view_name = 'viewAddProduct.php';
    }
    else{
        $products = selectProducts();
        $view_name = 'displayTableProducts.php';
    }

    
    require('../layout.php');

?>