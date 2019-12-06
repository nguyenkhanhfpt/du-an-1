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

    function selectTopView() {
        global $db;

        $select = "SELECT * FROM products ORDER BY view DESC LIMIT 5";

        return $db->query($select);
    }

    function searchProdcuct($name_product) {
        global $db;

        $select = "SELECT * FROM products WHERE name_product LIKE '%$name_product%' ";


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

    function updateViewProduct($id_product){
        global $db;
        
        $update = "UPDATE products 
                SET view = view + 1
                WHERE id_product = $id_product ";

        $db->exec($update);
    }
    
    function deleteProduct($id_product) {
        global $db;
        $delete = "DELETE FROM products WHERE id_product = $id_product";
        $db->exec($delete);
    }

    function priceAfterSale($percent, $price){
        $ratio = (100 - $percent) / 100;
        return $price * $ratio;
    }

    function orderDefault() {
        global $db;

        $select = "SELECT * FROM products";

        return $db->query($select);
    }

    function orderView() {
        global $db;

        $select = "SELECT * FROM products ORDER BY view DESC";

        return $db->query($select);
    }

    function orderLowestPrice() {
        global $db;

        $select = "SELECT * FROM products ORDER BY ((100 - sale) / 100) * price_product ASC";

        return $db->query($select);
    }

    function orderHighPrice() {
        global $db;

        $select = "SELECT * FROM products ORDER BY ((100 - sale) / 100) * price_product DESC";

        return $db->query($select);
    }

    
?>