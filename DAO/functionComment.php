<?php
    require_once 'database.php';

    function insertComment($title_comment, $content_comment, $review, $id_product_comment, $id_customer_comment, $img_comment, $date_comment){
        global $db;

        $insert = "INSERT INTO comments(title_comment, content_comment, review, id_product_comment, id_customer_comment, img_comment, date_comment)
                    VALUES('$title_comment', '$content_comment', $review, $id_product_comment, '$id_customer_comment', '$img_comment' , '$date_comment')";

        $db->exec($insert);
    }

    function selectComment($id_product) {
        global $db;

        $select = "SELECT CM.*, CU.name_customer, CU.img_customer  
                FROM comments AS CM
                INNER JOIN customers AS CU
                ON CM.id_customer_comment = CU.id_customer
                WHERE CM.id_product_comment = $id_product";

        return $db->query($select);
    }

?>