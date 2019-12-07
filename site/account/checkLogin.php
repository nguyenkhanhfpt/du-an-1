<?php
    session_start();
    require '../../DAO/functionCustomer.php';
    extract($_REQUEST);

    if(isset($_POST['login'])) {
        checkLogin($id_customer, $password, $saveAccount);
    }

    else if(array_key_exists('logout', $_REQUEST)) {
        logout();
    }
    
    
    
?>