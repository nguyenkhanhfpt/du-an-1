<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionProduct.php';

    $products = selectProducts();
    $topProducts = selectTopView();

    $view_name = 'view.php';

    require '../layout.php';

?>