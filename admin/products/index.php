<?php
    require '../../global.php';
    extract($_REQUEST);

    if(array_key_exists('viewAddProduct', $_REQUEST)) {
        $view_name = 'viewAddProduct.php';
    }
    else{
        $view_name = 'displayTableProducts.php';
    }

    
    require('../layout.php');

?>