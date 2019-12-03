<?php
    require_once 'database.php';

    function insertComment($title_comment, $content_comment, $review, $id_product_comment, $id_customer_comment, $img_comment, $date_comment){
        global $db;

        $insert = "INSERT INTO comments(title_comment, content_comment, review, id_product_comment, id_customer_comment, img_comment, date_comment)
                    VALUES('$title_comment', '$content_comment', $review, $id_product_comment, '$id_customer_comment', '$img_comment' , '$date_comment')";

        $db->exec($insert);
    }

?>