<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionProduct.php';

    $topProducts = selectTopView();
    $products = orderDefault();

    $view_name = 'view.php';
    
    require '../layout.php';

?>