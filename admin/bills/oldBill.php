<a class="btn btn-success mb-3" data-toggle="collapse" href="#oldBill" role="button" aria-expanded="false" aria-controls="oldBill">
    Hóa đơn đã thanh toán
</a>

<div class="collapse" id="oldBill">
    <div class="row">
        <?php foreach($oldBill as $bill) : ?>
            <div class="col-3 mb-3">
                <div class="p-3 shadow bg-white">
                    <div class="d-flex">
                        <img src="<?= $URL_IMG ?>/imgCustomers/<?=$bill['img_customer']?>" class="rounded-circle" width="45px">
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
                        <a href="index.php?detailBill&id_bill=<?=$bill['id_bill']?>" class="btn btn-success rounded-0">Xem lại</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>