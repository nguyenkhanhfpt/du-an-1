
<div class="container">
    <?php if (strlen($message)) : ?>
        <div class="alert alert-success">
            <?= $message ?>
        </div>
    <?php endif ?>

    <div class="shadow bg-white p-3 px-4">
        <h4 class="text-center aline-text">ĐƠN HÀNG CHI TIẾT</h4>
        <p class="mb-1"><span class="font-weight-bold">Tên khách hàng:</span> <?=$infoDetailBill['name_customer']?></p>
        <p class="mb-1"><span class="font-weight-bold">Địa chỉ:</span> <?=$infoDetailBill['address']?></p>
        <p class="mb-1"><span class="font-weight-bold">Số điện thoại:</span> <?=$infoDetailBill['phone']?></p>
        <p class="mb-1"><span class="font-weight-bold">Email:</span> <?=$infoDetailBill['email']?></p>
        <p class="mb-1"><span class="font-weight-bold">Mã đơn hàng:</span> #<?=$infoDetailBill['id_bill']?></p>
        <p class="mb-1"><span class="font-weight-bold">Thời gian mua hàng:</span> <?=$infoDetailBill['date_bill']?></p>

        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng mua</th>
                </tr>
            </thead>
            <tbody>
                <form action="index.php" id="formQuantifyCart" method="post">
                    <?php foreach ($infoProductInBill as $product) : ?>
                        <tr>
                            <td scope="row"><img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" class="rounded" height="50px" width="50px"></td>
                            <td><?= $product['name_product'] ?></td>
                            <td><?= number_format($product['price_product']) ?> đ</td>
                            <td ><?= $product['quantity'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </form>
            </tbody>
        </table>

        <h5 class="text-right font-weight-bold mr-4">Thành tiền: <span class="text-danger"><?=number_format($sumPrice)?> đ</span></h5>

        <?php if($status['status'] == 0) : ?>
            <a href="index.php?finishBill&id_bill=<?=$infoDetailBill['id_bill']?>" class="btn btn-success mt-3">Tiến hành giao hàng</a>
        <?php endif ?>
    </div>

    <a href="<?=$URL_ADMIN?>/bills" class="btn btn-success mt-3 rounded-0"> <- Xem hóa đơn</a>
</div>