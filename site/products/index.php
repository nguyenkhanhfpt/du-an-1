<?php
    require '../../global.php';
    require '../../DAO/functionProduct.php';
    $products = selectProducts();
    $topProducts = selectProducts();

    $view_name = 'view.php';

    require '../layout.php';

?>