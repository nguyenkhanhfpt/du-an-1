<?php
    require 'DAO/functionCustomer.php';

    $URL = "/du-an-1";
    $URL_SITE = $URL .'/site';
    $URL_ADMIN = $URL . '/admin';
    $URL_IMG = $URL . '/images';
    $URL_CSS = $URL .'/css';
    $URL_JS = $URL .'/js';

    $DIR_IMG =  $_SERVER["DOCUMENT_ROOT"] .$URL_IMG;


    function save_file($file_name, $target_dir){
        $file_uploaded = $_FILES[$file_name];
        $name_img = $file_uploaded['name'];
        $target_path = $target_dir . '/' .$name_img;
        move_uploaded_file($file_uploaded['tmp_name'], $target_path);
        return $name_img;
    }

    function checkCookie() {
        if(isset($_COOKIE['id_customer'])) {
            $_SESSION['id_customer'] = $_COOKIE['id_customer'];
            $_SESSION['name_customer'] = getName($_COOKIE['id_customer']);
            $_SESSION['role'] = getRole($_COOKIE['id_customer']);
        }
    }

    checkCookie();

?>