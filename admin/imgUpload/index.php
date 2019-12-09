<?php
    require '../../global.php';
    require '../../DAO/functionUploadImg.php';

    extract($_REQUEST);
    $imgs = selectImgsUpload();

    if(array_key_exists('deleteImgUpload', $_REQUEST)) {
        deleteImgUpload($id_img);
        header("Location: ./ ");
    }

    $view_name = "viewImg.php";
    require '../layout.php';
?>