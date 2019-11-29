<?php
    session_start();
    require '../../DAO/functionCustomer.php';
    extract($_REQUEST);
    
    checkLogin($id_customer, $password);
    
?>