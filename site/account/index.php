<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionBuyProduct.php';

    extract($_REQUEST);

    $customer = selectCustomerId($_SESSION['id_customer']);
    $products = selectProductsBuyByCustomer($_SESSION['id_customer']);


    if(array_key_exists('changeProfile', $_REQUEST)) {
        $img_customer = strlen($_FILES['img_customer']['name']) > 0 ? save_file('img_customer', $DIR_IMG .'/imgCustomers') : $oldImg;
        updateCustomerSite($_SESSION['id_customer'], $name_customer, $address, $img_customer);
        header("Location: ./");
    }

    else if(array_key_exists('changePassword', $_REQUEST)) {
        $check = checkPassword($_SESSION['id_customer'], $password);
        if($check == 'true'){
            changePassword($_SESSION['id_customer'], $newPassword);
            $message = "Bạn đã thay đổi mật khẩu thành công!";
        }
        else {
            $err = 'Mật khẩu cũ không chính sác!';
        }
    }

    $view_name = 'viewAccount.php';

    require '../layout.php';    
?>