<?php
    session_start();
    require '../../DAO/functionCustomer.php';
    extract($_REQUEST);

    if(!empty($id_customer)){
        $img_customer = 'user.svg';
        $role = 0;
        insertCustomer($id_customer, $name_customer, $phone, $email, $address, $gender, $password, $img_customer ,$role);
    }
    else{
        echo "<script>history.back()</script>";
    }

?>