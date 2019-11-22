<?php
    require_once 'database.php';

    function selectProducts(){
        global $db;

        $select = "SELECT * FROM products";

        return $db->query($select);
    }

    function insertProduct($name_product, $price_product, $sale, $kind_product, $img_product, $description){
        global $db;
        
        $insert = "INSERT INTO products(name_product, price_product, sale, kind_product, img_product, description, view)
        VALUES('$name_product','$price_product','$sale','$kind_product','$img_product','$description',0)";

        $db->exec($insert);
    }
    
    function deleteProduct($id_product) {
        global $db;
        $delete = "DELETE FROM products WHERE id_product = $id_product";
        $db->exec($delete);
    }
?>