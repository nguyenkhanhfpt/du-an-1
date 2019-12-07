<?php
    require 'database.php';

    extract($_REQUEST);

    function insertImg($img_upload, $id_product, $id_customer){
        global $db;

        $insert = "INSERT INTO upload_img(img_upload, id_product, id_customer) VALUES('$img_upload', $id_product, '$id_customer')";

        $db->exec($insert);
    }

    function selectImgUpload($id_product){
        global $db;

        $select = "SELECT * FROM upload_img WHERE id_product = $id_product ";

        return $db->query($select);
    }

    function deleteImgUpload($id_img) {
        global $db;

        $delete = "DELETE FROM upload_img WHERE id_img = $id_img";

        $db->exec($delete);
    }
?>