<?php
    require '../../global.php';
    require '../../DAO/functionProduct.php';

    $message = '';
    extract($_REQUEST);

    if(array_key_exists('viewAddProduct', $_REQUEST)) {
        $view_name = 'viewAddProduct.php';
    }

    else if(array_key_exists('addNewProduct', $_REQUEST)) {
        $img_product = save_file("img", $DIR_IMG);
        insertProduct($name_product, $price_product, $sale, $kind_product, $img_product, $description);
        $message = 'Thêm mới thành công!';
        $view_name = 'viewAddProduct.php';
    }

    else if(array_key_exists('deleteProduct', $_REQUEST)){
        deleteProduct($id_product);
        $message = 'Xóa thành công!';
        $products = selectProducts();
        $view_name = 'displayTableProducts.php';
    }

    else if(array_key_exists('viewEditProduct', $_REQUEST)){
        $product = selectProduct($id_product);
        $view_name = 'editProduct.php';
    }

    else if(array_key_exists('editProduct', $_REQUEST)){
        $img_product = strlen($_FILES['img']['name']) > 0 ? save_file("img", $DIR_IMG) : $old_img;
        updateProduct($id_product, $name_product, $price_product, $sale, $kind_product, $img_product, $description);

        $message = 'Thay đổi thành công!';
        $product = selectProduct($id_product);
        $view_name = 'editProduct.php';
    }
    
    else{
        $products = selectProducts();
        $view_name = 'displayTableProducts.php';
    }

    
    require('../layout.php');

?>