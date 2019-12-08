<?php
    session_start();
    require '../global.php';
    require '../DAO/functionBuyProduct.php';
    require '../DAO/functionKindProduct.php';

    $numbers = statisticalBuy();
    $dates = statisticalBuy();

    $nameKind = selectNumberKindInProduct();
    $numberKind = selectNumberKindInProduct();

    $view_name = 'home.php';
    include('layout.php');

?>