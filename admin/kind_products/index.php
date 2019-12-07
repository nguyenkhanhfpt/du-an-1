<?php 
    require '../../global.php';
    require '../../DAO/functionKindProduct.php';

    extract($_REQUEST);
    $kindProducts = selectKindProduct();
    $message = "";

    if(array_key_exists('addKind', $_REQUEST)){
        insertKindProduct($name_kind);
        header("Location: ./?message");
    }

    else if(array_key_exists('message', $_REQUEST)) {
        $message = 'Thêm thành công!';
        $view_name = 'view.php';
    }

    else if(array_key_exists('delete', $_REQUEST)) {
        deleteKindProduct($id_kind);
        header("Location: ./?deleteFN");
    }
    else if(array_key_exists('deleteFN', $_REQUEST)) {
        $message = 'Xóa thành công!';
        $view_name = 'view.php';
    }

    else if(array_key_exists('edit', $_REQUEST)) {
        $kind = selectKindProductId($id_kind);
        $view_name = "formEdit.php";
    }

    else if(array_key_exists('editKind', $_REQUEST)) {
        editKindProduct($id_kind,$name_kind);

        $kind = selectKindProductId($id_kind);
        $message = 'Thay đổi thành công!';
        $view_name = "formEdit.php";
     }

    else{
        $view_name = 'view.php';
    }

    require '../layout.php';
    


?>