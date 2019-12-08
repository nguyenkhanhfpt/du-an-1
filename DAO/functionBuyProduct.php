<?php
    require 'database.php';

    function insertBill($id_bill, $id_customer_bill) {
        global $db;

        $insert = "INSERT INTO bill(id_bill, id_customer_bill, status) VALUES($id_bill , '$id_customer_bill', 0)";
        $db->exec($insert);
    }

    function insertDetailBill($id_bill, $id_product_bill, $quantity, $amount) {
        global $db;

        $insert = "INSERT INTO detail_bill (id_bill, id_product_bill, quantity, amount) VALUES($id_bill ,$id_product_bill, $quantity, $amount) ;";

        $db->exec($insert);
    }

    function selectNewBill() {
        global $db;

        $select = "SELECT B.*, C.name_customer, C.img_customer
                    FROM bill AS B INNER JOIN customers AS C ON B.id_customer_bill = C.id_customer
                    WHERE B.status = 0 ORDER BY date_bill DESC";

        return $db->query($select);
    }

    function selectOldBill() {
        global $db;

        $select = "SELECT B.*, C.name_customer, C.img_customer
                    FROM bill AS B INNER JOIN customers AS C ON B.id_customer_bill = C.id_customer
                    WHERE B.status = 1 ORDER BY date_bill DESC";

        return $db->query($select);
    }

    function selectDetailBill($id_bill) {
        global $db;

        $select = "SELECT B.*, C.*
                    FROM bill AS B INNER JOIN customers AS C ON B.id_customer_bill = C.id_customer
                    WHERE B.id_bill = $id_bill";

        $lists = $db->query($select);

        return $lists->fetch();
    }

    function selectStatus($id_bill) {
        global $db;

        $select = "SELECT status FROM bill WHERE id_bill = $id_bill";

        $lists = $db->query($select);

        return $lists->fetch();
    }

    function selectDetailProductInBill($id_bill) {
        global $db;

        $select = "SELECT D.*, P.*
                    FROM detail_bill AS D INNER JOIN products AS P ON D.id_product_bill = P.id_product
                    WHERE D.id_bill = $id_bill";

        return $db->query($select);
    }

    function selectProductsBuyByCustomer($id_customer_bill) {
        global $db;

        $select = "SELECT D.*, P.*, B.date_bill
                    FROM detail_bill AS D INNER JOIN products AS P ON D.id_product_bill = P.id_product
                    INNER JOIN bill AS B ON D.id_bill = B.id_bill 
                    WHERE B.id_customer_bill = '$id_customer_bill'
                    ORDER BY B.date_bill DESC";

        return $db->query($select);
    }

    function sumPriceBill($id_bill) {
        global $db;

        $sum = "SELECT SUM(quantity * amount)
                FROM detail_bill 
                WHERE id_bill = $id_bill";

        $lists = $db->query($sum);    
        $list = $lists->fetch();

        return $list['SUM(quantity * amount)'];

    }

    function countProductsInBill($id_bill) {
        global $db;

        $select = "SELECT count(id_detail_bill)
                    FROM detail_bill
                    WHERE id_bill = $id_bill
                    GROUP BY id_bill ";

        $lists = $db->query($select);
        $list = $lists->fetch();

        return $list['count(id_detail_bill)'];
    }

    function updateStatusBill($id_bill) {
        global $db;

        $update = "UPDATE bill SET status = 1 WHERE id_bill = $id_bill ";

        $db->exec($update);
    }

    // Select để thống kê mua bán
    function statisticalBuy() {
        global $db;

        $select = "SELECT B.*, D.*, SUM(D.quantity)
                    FROM bill AS B INNER JOIN detail_bill AS D ON B.id_bill = D.id_bill
                    WHERE B.status = 1
                    GROUP BY DATE(date_bill)";

        return $db->query($select);
    }

?>