<img src="<?=$URL_IMG?>/poster.jpg" alt="" class="w-100">
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-12 col-md-3">
            <form action="">
                <div class="form-group">
                    <div class="input-affix">
                        <i class="fas fa-search prefix-icon anticon anticon-search"></i>
                        <input type="text" class="form-control py-2" placeholder="Tìm kiếm">
                    </div>
                </div>
            </form>
        </div>
        <div class="d-none d-md-block col-md-9">
            <form action="order.php" method="GET" id="formOrder">
                <div class="form-group d-flex justify-content-end align-items-center">
                    <label class="text-secondary m-0 pr-2" for="">Sắp xếp theo: </label>
                    <select class="form-control rounded-0 w-20" id="order" name="order">
                        <option>----</option>
                        <option value="default">Mặc định</option>
                        <option value="new">Mới nhất</option>
                        <option value="viewest">Xem nhiều nhất</option>
                        <option value="lowestPrice">Giá thấp nhất</option>
                        <option value="highestPrice">Giá cao nhất</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-3 order-2 order-md-1">
            <p class="categories">DANH MỤC SẢN PHẨM</p>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center mb-1 border-0 pl-0">
                    <a href="">Món chính</a>
                    <span class="badge badge-primary badge-pill bg-transparent text-dark border">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center mb-1 border-0 pl-0">
                    <a href="">Trà sữa</a>
                    <span class="badge badge-primary badge-pill bg-transparent text-dark border">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center mb-1 border-0 pl-0">
                    <a href="">Đồ ăn nhanh</a>
                    <span class="badge badge-primary badge-pill bg-transparent text-dark border">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center mb-1 border-0 pl-0">
                    <a href="">Đồ uống</a>
                    <span class="badge badge-primary badge-pill bg-transparent text-dark border">1</span>
                </li>
            </ul>

            <!-- Top rate -->
            <p class="categories mt-4">TOP SẢN PHẨM</p>
            <div class="d-flex flex-column">
                <?php foreach ($topProducts as $product) : ?>
                    <div class="d-flex mb-4">
                        <a href="<?= $URL_SITE ?>?viewProduct&id_product=<?= $product['id_product'] ?>">
                            <img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" width="70px" height="78px">
                        </a>
                        <div class="pl-4 pl-md-2">
                            <p class="mb-2 top-product "><a href="<?= $URL_SITE ?>?viewProduct&id_product=<?= $product['id_product'] ?>" class="text-secondary text-decoration-none" ><?= $product['name_product']?></a></p>
                            <strong><?= priceAfterSale($product['sale'], $product['price_product']) ?> đ</strong>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>
        <div class="col-12 col-md-9 order-md-2">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-6 col-md-4">
                        <div class="border product mb-3">
                            <a href="<?= $URL_SITE ?>?viewProduct&id_product=<?= $product['id_product'] ?>">
                                <img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" width="100%">
                            </a>
                            <div class="card-body text-center">
                                <div class="name-over">
                                    <a href="<?= $URL_SITE ?>?viewProduct&id_product=<?= $product['id_product'] ?>" class="name text-decoration-none"><?= $product['name_product'] ?></a>
                                </div>
                                <?php if ($product['sale'] > 0) : ?>
                                    <p class="price mb-0"><span class="d-none d-sm-inline-block"><?= number_format($product['price_product']) ?> đ</span> <?= priceAfterSale($product['sale'], $product['price_product']) ?> đ</p>
                                <?php else : ?>
                                    <p class="price mb-0"><?= number_format($product['price_product']) ?> đ</p>
                                <?php endif ?>
                            </div>
                            <div class="display-card">
                                <a href="<?= $URL_SITE ?>?cart" class="shadow rounded">
                                    <img src="<?= $URL_IMG ?>/shopping-cart.svg" alt="" width="25px">
                                </a>
                            </div>
                            <!-- Sale    -->
                            <?php if ($product['sale'] > 0) : ?>
                                <div class="sale rounded-pill">
                                    Sale
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>



<script>
    let order = document.getElementById('order');
    let formOrder = document.getElementById('formOrder');

    order.onchange = () => {
        formOrder.submit();
    }
</script>