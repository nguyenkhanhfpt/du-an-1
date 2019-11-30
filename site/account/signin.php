<?php
    session_start();
    require '../../DAO/functionCustomer.php';
    extract($_REQUEST);

    if(!empty($id_customer)){
        insertCustomer($id_customer, $name_customer, $phone, $email, $address, $gender, $password);
    }
    else{
        echo "<script>history.back()</script>";
    }

?>