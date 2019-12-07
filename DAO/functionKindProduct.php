<?php
    require 'database.php';

    function insertKindProduct($name_kind){
        global $db;

        $insert = "INSERT INTO kind_products(name_kind) 
            VALUES ('$name_kind')";

        $db->exec($insert);
    }

    function selectKindProduct(){
        global $db;

        $select = "SELECT * FROM kind_products";

        return $db->query($select);
    }

    function selectKindProductId($id_kind){
        global $db;

        $select = "SELECT * FROM kind_products WHERE id_kind = $id_kind";

        $kinds = $db->query($select);

        return $kinds->fetch();

    }

    function selectNumberKindInProduct(){
        global $db;

        $select = "SELECT K.name_kind, P.kind_product, COUNT(id_product)  FROM kind_products AS K
                    INNER JOIN products AS P ON K.id_kind = P.kind_product
                    GROUP BY P.kind_product";

        return $db->query($select);
    }

    function  deleteKindProduct($id_kind){
        global $db;
        $delete = "DELETE FROM kind_products WHERE id_kind = $id_kind";
        $db->exec($delete);
    }

    function  editKindProduct($id_kind,$name_kind){
        global $db;
        $edit = "UPDATE kind_products SET name_kind= '$name_kind' WHERE id_kind=$id_kind ";
        $db->exec($edit);
    }
 ?>