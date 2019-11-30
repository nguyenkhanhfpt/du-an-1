<!-- Phần header -->
<?php require 'components/header.php' ?>

<!-- Phần cam kết -->
<?php require 'components/intro.php' ?>


<!-- Phần sản phẩm -->
<article>
    <div class="container">
        <!-- <h2 class="text-center mb-3">Sản phẩm mới</h2> -->
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="border product mb-3">
                    <img src="<?= $URL_IMG ?>/my.png" width="100%">
                    <div class="card-body text-center">
                        <div class="name-over">
                            <a href="#" class="name text-decoration-none">Mỳ quảng Phú Chiêm</a>
                        </div>
                        <!-- Sale price  -->
                        <p class="price mb-0"><span>30.000 đ</span> 20.000 đ</p>
                    </div>
                    <div class="display-card">
                        <a href="#" class="shadow rounded">
                            <img src="<?= $URL_IMG ?>/shopping-cart.svg" alt="" width="25px">
                        </a>
                    </div>
                    <!-- Sale    -->
                    <div class="sale rounded-pill">
                        Sale
                    </div>
                </div>
            </div>
            <?php foreach ($products as $product) : ?>
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <a href="<?= $URL_SITE ?>?viewProduct">
                            <img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" width="100%">
                        </a>
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="<?= $URL_SITE ?>?viewProduct" class="name text-decoration-none"><?= $product['name_product'] ?></a>
                            </div>
                            <p class="price mb-0"><?= number_format($product['price_product']) ?> đ</p>
                        </div>
                        <div class="display-card">
                            <a href="<?= $URL_SITE ?>?cart" class="shadow rounded">
                                <img src="<?= $URL_IMG ?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</article>