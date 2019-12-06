<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionBuyProduct.php';
    require '../../DAO/functionProduct.php';

    extract($_REQUEST);

    $message = '';

    $newBill = selectNewBill();
    $oldBill = selectOldBill();

    if(array_key_exists('detailBill', $_REQUEST)) {
        $infoDetailBill = selectDetailBill($id_bill);
        $infoProductInBill = selectDetailProductInBill($id_bill);
        $sumPrice = sumPriceBill($id_bill); // hàm tính tổng của tất cả sản phẩm trong bill
        $status = selectStatus($id_bill); // kiểm tra xem bill hàng đã được giao hay chưa

        $view_name = 'viewDetailBill.php';
    }

    else if(array_key_exists('finishBill', $_REQUEST)) {
        updateStatusBill($id_bill);

        $infoDetailBill = selectDetailBill($id_bill);
        $infoProductInBill = selectDetailProductInBill($id_bill);
        $sumPrice = sumPriceBill($id_bill); // hàm tính tổng của tất cả sản phẩm trong bill
        $status = selectStatus($id_bill); // kiểm tra xem bill hàng đã được giao hay chưa

        $message = 'Giao hàng thành công!';
        $view_name = 'viewDetailBill.php';
    }

    else {
        $view_name = "viewBill.php";
    }

    require '../layout.php';
?>