<?php 
    session_start();
    date_default_timezone_set("Asia/Ho_Chi_Minh");  // Thay đổi timezone để insert thời gian khi comment
    require '../global.php';
    require '../DAO/functionProduct.php';
    require '../DAO/functionComment.php';
    $products = selectProducts();

    $message = '';
    $err = '';

    extract($_REQUEST);

    if(array_key_exists('login', $_REQUEST)) {
        $view_name = 'components/login.php';
    }

    else if(array_key_exists('viewProduct', $_REQUEST)) {
        updateViewProduct($id_product);
        $relatedProducts = selectProductsLimit();
        $viewProduct = selectProduct($id_product);
        $comments = selectComment($id_product);
        $view_name = 'components/viewProduct.php';
    }
    
    else if(array_key_exists('signin', $_REQUEST)) {
        $view_name = 'components/signin.php';
    }

    else if(array_key_exists('successSignin', $_REQUEST)) {
        $view_name = 'components/signin.php';
        $message = "Đăng ký thành công!";
    }

    else if(array_key_exists('successLogin', $_REQUEST)) {
        $view_name = 'components/login.php';
        $message = "Đăng nhập thành công!";
    }

    else if(array_key_exists('falseLogin', $_REQUEST)) {
        $view_name = 'components/login.php';
        $err = "Đăng nhập thất bại!";
    }

    else if(array_key_exists('submitComment', $_REQUEST)) {
        if(!isset($_SESSION['id_customer'])) {
            header('Location: index.php?viewProduct&err=Phải đăng nhập để bình luận!&id_product=' .$id_product);
        }
        else{
            $id_product_comment = $id_product;
            $id_customer_comment = $_SESSION['id_customer'];
            $img_comment = strlen($_FILES['img_comment']['name']) > 0 ? save_file("img_comment", $DIR_IMG .'/imgComment') : '';
            $date_comment = date("Y-m-d H:i:s");
            insertComment($title_comment, $content_comment, $review, $id_product_comment, $id_customer_comment, $img_comment, $date_comment);

            header('Location: index.php?viewProduct&id_product=' .$id_product);
        }
        
    }
    
    else{
        $view_name = 'home.php';
    }

    require 'layout.php';
?>
