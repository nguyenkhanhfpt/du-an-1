<?php
    require 'database.php';

    extract($_REQUEST);

    function insertImg($img_upload, $id_product){
        global $db;

        $insert = "INSERT INTO upload_img(img_upload, id_product) VALUES('$img_upload', $id_product)";

        $db->exec($insert);
    }

    function selectImgUpload($id_product){
        global $db;

        $select = "SELECT * FROM upload_img WHERE id_product = $id_product ";

        return $db->query($select);
    }
?>