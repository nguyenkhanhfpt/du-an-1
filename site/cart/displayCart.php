<div class="container" style="min-height:400px">
    <div class="card border-0">
        <div class="card-body">
            <h4 class="mb-3">Giỏ hàng</h4>
            <?php if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) : ?>
                <p>Không có sản phẩm nào</p>
                <a href="<?=$URL_SITE?>/products" class="btn btn-success">Tiếp tục mua hàng -></a>
            <?php else : ?>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="index.php"  id="formQuantifyCart" method="post">
                                    <?php foreach ($_SESSION['cart'] as $key => $product) : ?>
                                        <tr>
                                            <td scope="row"><img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" class="rounded" height="50px" width="50px"></td>
                                            <td><?= $product['name_product'] ?></td>
                                            <td><?= number_format($product['price_product']) ?> đ</td>
                                            <td>
                                                <div class='w-30'> 
                                                    <input type="hidden" name="updateCart">
                                                    <input type="number" class="form-control" name="quantity_cart[<?=$key?>]" value='<?= $product['quantity_product'] ?>' min="1">
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-success  button" href="index.php?deleteProductCard&id_product=<?= $product['id_product'] ?>" role="button">Xóa</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <a href="javascript:void(0);" id="updateCart" class="text-dark">Cập nhật</a> <br>
                        <a href="<?=$URL_SITE?>/products" class="text-success">Tiếp tục mua hàng</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="py-3 d-flex justify-content-between">
                            <p>Thành tiền: </p>
                            <h4 class="text-danger font-weight-bold"><?=number_format(sumPrice());?> đ</h4>
                        </div>
                        <a href="" class="btn btn-success btn-block py-2">Tiến hành thanh toán</a>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>


<script>
    document.getElementById('updateCart').onclick = () => {
        document.getElementById('formQuantifyCart').submit();
    }
</script>