<?php
    require 'database.php';

    function insertBill($id_bill, $id_customer_bill) {
        global $db;

        $insert = "INSERT INTO bill(id_bill, id_customer_bill) VALUES($id_bill , '$id_customer_bill')";
        $db->exec($insert);
    }

    function insertDetailBill($id_bill, $id_product_bill, $quantity, $amount) {
        global $db;

        $insert = "INSERT INTO detail_bill (id_bill, id_product_bill, quantity, amount) VALUES($id_bill ,$id_product_bill, $quantity, $amount) ;";

        $db->exec($insert);
    }

?>