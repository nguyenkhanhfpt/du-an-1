<?php
    require_once 'database.php';

    function selectCustomers() {
        global $db;

        $select = "SELECT * FROM customers WHERE role = 0";

        return $db->query($select);
    }

    function selectCustomerId($id_customer) {
        global $db;

        $select = "SELECT * FROM customers WHERE id_customer = '$id_customer' ";

        $customers = $db->query($select);
        return $customers->fetch();
    }

    function selectEmployee() {
        global $db;

        $select = "SELECT * FROM customers WHERE role = 1";

        return $db->query($select);
    }

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

    function insertCustomer($id_customer, $name_customer, $phone, $email, $address, $gender, $password, $img_customer ,$role){
        global $db;
        
        $insert = "INSERT INTO customers(id_customer, name_customer, phone, email, address, gender, password, img_customer, role)
        VALUES('$id_customer','$name_customer','$phone','$email','$address','$gender', '$password', '$img_customer', $role)";

        $db->exec($insert);

        $_SESSION['id_customer'] = $id_customer;
        $_SESSION['name_customer'] = getName($id_customer);
        $_SESSION['role'] = $role;

        if(isset($_SESSION['id_customer'])) {
            header("Location: ../?successSignin");
        }
    }

    function insertCustomerAdmin($id_customer, $name_customer, $phone, $email, $address, $gender, $password, $img_customer ,$role){
        global $db;
        
        $insert = "INSERT INTO customers(id_customer, name_customer, phone, email, address, gender, password, img_customer, role)
        VALUES('$id_customer','$name_customer','$phone','$email','$address','$gender', '$password', '$img_customer', $role)";

        $db->exec($insert);
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

    function deleteCustomer($id_customer) {
        global $db;

        $delete = "DELETE FROM customers WHERE id_customer = '$id_customer'";

        $db->exec($delete);
    }
?>