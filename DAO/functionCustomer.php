<?php
    require_once 'database.php';

    function insertCustomer($id_customer, $name_customer, $phone, $email, $address, $gender, $password){
        global $db;
        
        $insert = "INSERT INTO customers(id_customer, name_customer, phone, email, address, gender, password, img_custumer, role)
        VALUES('$id_customer','$name_customer','$phone','$email','$address','$gender', '$password', 'user.jpg', 0)";

        $db->exec($insert);
    }

    function checkLogin($id_customer, $password) {
        global $db;

        $select = "SELECT * FROM customers WHERE id_customer = '$id_customer' AND password = '$password' ";

        $members = $db->query($select);
        $member = $members->fetch();

        if(is_array($member)){
            $_SESSION['id_customer'] = $id_customer;
        }

        if(empty($_SESSION['id_customer'])) {
            header("Location: ../?falseLogin");
        }
        else{
            header("Location: ../?successLogin");
        }

    }
?>