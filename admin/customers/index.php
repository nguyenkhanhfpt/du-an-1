<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionCustomer.php';

    $message = '';

    extract($_REQUEST);

    if(array_key_exists('deleteCustomer', $_REQUEST)) {
        deleteCustomer($id_customer);
        header("Location: ../customers");
    }

    else if(array_key_exists('addCustomer', $_REQUEST)) {
        $img_customer = strlen($_FILES['img_customer']['name']) ? save_file('img_customer', $DIR_IMG .'/imgCustomers') : 'user.svg';
        insertCustomerAdmin($id_customer, $name_customer, $phone, $email, $address, $gender, $password, $img_customer ,$role);
        $message = 'Thêm người dùng thành công!';

        $customers = selectCustomers();
        $employees = selectEmployee();
        $view_name = 'viewTableCustomer.php';
    }

    else if(array_key_exists('viewEditCustomer', $_REQUEST)) {
        $customer = selectCustomerId($id_customer);
        $view_name = 'viewEditCustomer.php';
    }

    else if(array_key_exists('editCustomer', $_REQUEST)) {
        $view_name = 'viewEditCustomer.php';
    }

    else {
        $customers = selectCustomers();
        $employees = selectEmployee();
        $view_name = 'viewTableCustomer.php';
    }



    


    
    require '../layout.php';
?>