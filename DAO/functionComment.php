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
                WHERE CM.id_product_comment = $id_product
                ORDER BY date_comment DESC";


        return $db->query($select);
    }

    function deleteComment($id_comment) {
        global $db;

        $delete = "DELETE FROM comments WHERE id_comment = $id_comment";

        $db->exec($delete);
    }

    function statisticalComemnt() {
        global $db;

        $select = "SELECT CM.*, count(id_comment), P.img_product, P.name_product
                FROM comments AS CM
                INNER JOIN products AS P
                ON CM.id_product_comment = P.id_product
                GROUP BY id_product_comment";


        return $db->query($select);
    }

    function selectCommentProduct($id_product_comment) {
        global $db;

        $select = "SELECT CM.*, P.*, CU.name_customer, CU.img_customer
                FROM comments AS CM
                INNER JOIN products AS P
                ON CM.id_product_comment = P.id_product
                INNER JOIN customers AS CU ON CM.id_customer_comment = CU.id_customer
                WHERE id_product_comment = $id_product_comment";

        return $db->query($select);
    }

?>