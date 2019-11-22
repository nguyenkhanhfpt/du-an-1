<?php if(strlen($message)) : ?>
    <div class="alert alert-success">
        <?=$message?>
    </div>
<?php endif ?>

<div class="card">
    <div class="card-body">
        <h5>Danh sách Đồ ăn & Đồ uống</h5>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Giảm giá</th>
                        <th scope="col">Lượt xem</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product) : ?>
                        <tr>
                            <td scope="row"><?=$product['id_product']?></td>
                            <td>
                                <img src="<?=$URL_IMG?>/<?=$product['img_product']?>" class="rounded" height="45px"
                                    width="45px">
                                <?=$product['name_product']?>
                            </td>
                            <td><?=number_format($product['price_product'])?> đ</td>
                            <td><?=$product['sale']?> %</td>
                            <td><?=$product['view']?></td>
                            <td>
                                <a class="btn btn-success rounded-pill button " href="#"
                                    role="button">Sửa</a>
                                <a class="btn btn-success rounded-pill button" href="index.php?deleteProduct&id_product=<?=$product['id_product']?>"
                                    role="button">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<a href="<?=$URL_ADMIN?>/products?viewAddProduct" class="btn btn-success mt-3">Thêm sản mới</a>