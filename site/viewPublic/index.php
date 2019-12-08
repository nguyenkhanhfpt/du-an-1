<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionUploadImg.php';

    $imgs = selectImgsUpload();

    $view_name = 'viewImg.php';

    require '../layout.php';
?>