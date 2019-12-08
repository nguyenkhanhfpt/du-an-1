<?php
    session_start();
    require '../global.php';
    require '../DAO/functionBuyProduct.php';

    $numbers = statisticalBuy();
    $dates = statisticalBuy();
    
    $view_name = 'home.php';
    include('layout.php');

?>