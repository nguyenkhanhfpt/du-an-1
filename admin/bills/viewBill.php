<h4>Hóa đơn mới</h4>

<div class="row mt-3">
    <?php $count = 0; ?>
    <?php foreach($newBill as $bill) : $count++; ?>
        <div class="col-3 mb-3">
            <div class="p-3 shadow bg-white">
                <div class="d-flex">
                    <img src="<?= $URL_IMG ?>/imgCustomers/<?=$bill['img_customer']?>" class="rounded-circle" width="50px" height="50px">
                    <div class="ml-2">
                        <p class="font-weight-bold mb-0"><?=$bill['name_customer']?></p>
                        <span class="small text-secondary"><?=$bill['date_bill']?></span>
                    </div>
                </div>
                <hr>
                <div>
                    <p class="small-14 mb-1">Mã đơn hàng: #<?=$bill['id_bill']?></p>
                    <p class="small-14 mb-1">Số sản phẩm mua: <?= countProductsInBill($bill['id_bill'])?></p>
                    <p class="small-14">Tổng tiền: <?=number_format(sumPriceBill($bill['id_bill']))?> đ</p>
                </div>
                <hr>
                <div class="d-flex justify-content-end">
                    <a href="index.php?detailBill&id_bill=<?=$bill['id_bill']?>" class="btn btn-success rounded-0">Kiểm tra</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <?php if($count == 0) : ?>
        <p class="ml-3">Không có hóa đơn mới nào</p>
    <?php endif ?>
</div>


<?php require 'oldBill.php' ?>