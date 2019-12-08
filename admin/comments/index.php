<?php 
    require '../../global.php';
    require '../../DAO/functionComment.php';
    require '../../DAO/functionProduct.php';

    extract($_REQUEST);

    

    if(array_key_exists('detailComment', $_REQUEST)) {
        $comments = selectCommentProduct($id_product_comment);
        $product = selectProduct($id_product_comment);
        $view_name = 'viewComment.php';
    }

    else if(array_key_exists('deleteComment', $_REQUEST)) {
        deleteComment($id_comment);
        $view_name = 'viewComment.php';
    }

    else{
        $statisticalComemnts = statisticalComemnt();
        $view_name = 'view.php';
    }

    
    require '../layout.php';
?>