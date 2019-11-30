<?php
    require_once 'database.php';

    function selectProduct($id_product){
        global $db;

        $select = "SELECT * FROM products WHERE id_product = '$id_product'";

        $product = $db->query($select);
        return $product->fetch();
    }

    function selectProducts(){
        global $db;

        $select = "SELECT * FROM products ORDER BY id_product DESC";

        return $db->query($select);
    }

    function selectProductsLimit(){
        global $db;

        $select = "SELECT * FROM products ORDER BY id_product DESC LIMIT 4";

        return $db->query($select);
    }

    function insertProduct($name_product, $price_product, $sale, $kind_product, $img_product, $description){
        global $db;
        
        $insert = "INSERT INTO products(name_product, price_product, sale, kind_product, img_product, description, view)
        VALUES('$name_product','$price_product','$sale','$kind_product','$img_product','$description',0)";

        $db->exec($insert);
    }

    function updateProduct($id_product ,$name_product, $price_product, $sale, $kind_product, $img_product, $description){
        global $db;
        
        $update = "UPDATE products 
                SET name_product = '$name_product', price_product = '$price_product', sale = '$sale', kind_product = '$kind_product', img_product = '$img_product', description = '$description'
                WHERE id_product = $id_product ";

        $db->exec($update);
    }
    
    function deleteProduct($id_product) {
        global $db;
        $delete = "DELETE FROM products WHERE id_product = $id_product";
        $db->exec($delete);
    }
?>