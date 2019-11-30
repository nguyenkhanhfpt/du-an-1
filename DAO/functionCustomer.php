<?php
    require_once 'database.php';

    function getRole($id_customer) {
        global $db;

        $select = "SELECT role FROM customers WHERE id_customer = '$id_customer'";

        $members = $db->query($select);
        $member = $members->fetch();
        return $member['role'];
    }

    function getName($id_customer) {
        global $db;

        $select = "SELECT name_customer FROM customers WHERE id_customer = '$id_customer'";

        $members = $db->query($select);
        $member = $members->fetch();
        return $member['name_customer'];
    }

    function insertCustomer($id_customer, $name_customer, $phone, $email, $address, $gender, $password){
        global $db;
        
        $insert = "INSERT INTO customers(id_customer, name_customer, phone, email, address, gender, password, img_custumer, role)
        VALUES('$id_customer','$name_customer','$phone','$email','$address','$gender', '$password', 'user.jpg', 0)";

        $db->exec($insert);

        $_SESSION['id_customer'] = $id_customer;
        $_SESSION['name_customer'] = getName($id_customer);
        $_SESSION['role'] = getRole($id_customer);

        if(isset($_SESSION['id_customer'])) {
            header("Location: ../?successSignin");
        }
    }

    function checkLogin($id_customer, $password) {
        global $db;

        $select = "SELECT * FROM customers WHERE id_customer = '$id_customer' AND password = '$password' ";

        $members = $db->query($select);
        $member = $members->fetch();

        if(is_array($member)){
            $_SESSION['id_customer'] = $id_customer;
            $_SESSION['name_customer'] = getName($id_customer);
            $_SESSION['role'] = getRole($id_customer);
        }

        if(empty($_SESSION['id_customer'])) {
            header("Location: ../?falseLogin");
        }
        else{
            header("Location: ../?successLogin");
        }
    }

    function logout() {
        unset($_SESSION['id_customer']);
        unset($_SESSION['name_customer']);
        unset($_SESSION['role']);
        header('Location: ../');
    }
?>