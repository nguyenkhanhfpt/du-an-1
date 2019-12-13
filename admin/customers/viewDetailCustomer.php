<div class="p-3 bg-white border-bottom d-flex justify-content-between">
    <div class="d-flex">
        <img src="<?= $URL_IMG ?>/imgCustomers/<?= $customer['img_customer'] ?>" class="rounded" height="70px" width="70px">
        <h5 class="font-weight-bold ml-2"><?= $customer['name_customer'] ?></h5>
    </div>
</div>


<div class="card mt-3">
    <div class="card-body">
        <h5>Lịch sử mua hàng</h5>
        <table class="table table-hover mt-3">
            <thead id="thead">
                <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Ngày mua</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; ?>
                <?php foreach ($products as $product) : $count++; ?>
                    <tr>
                        <td scope="row"><img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" class="rounded" height="50px" width="50px"> <?= $product['name_product'] ?></td>
                        <td><?= $product['amount'] ?> đ</td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?= $product['date_bill'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php if($count == 0) : ?>
            <script>
                document.getElementById('thead').style.display = 'none';
            </script>
            <p>Tài khoản chưa mua sản phẩm nào</p>
        <?php endif; ?>
    </div>
</div>

<a href="<?=$URL_ADMIN?>/customers" class="btn btn-success mt-3">Danh sách người dùng</a>