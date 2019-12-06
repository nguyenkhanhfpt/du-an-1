<!-- Phần header -->
<?php require 'components/header.php' ?>

<!-- Phần cam kết -->
<?php require 'components/intro.php' ?>


<!-- Phần sản phẩm -->
<article>
    <div class="container">
        <!-- <h2 class="text-center mb-3">Sản phẩm mới</h2> -->
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <a href="<?= $URL_SITE ?>?viewProduct&id_product=<?= $product['id_product'] ?>">
                            <img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" width="100%">
                        </a>
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="<?= $URL_SITE ?>?viewProduct&id_product=<?= $product['id_product'] ?>" class="name text-decoration-none"><?= $product['name_product'] ?></a>
                            </div>
                            <?php if ($product['sale'] > 0) : ?>
                                <p class="price mb-0"><span class="d-none d-sm-inline-block"><?= number_format($product['price_product']) ?> đ</span> <?= number_format(priceAfterSale($product['sale'], $product['price_product'])) ?> đ</p>
                            <?php else : ?>
                                <p class="price mb-0"><?= number_format($product['price_product']) ?> đ</p>
                            <?php endif ?>
                        </div>
                        <div class="display-card">
                            <a href="<?= $URL_SITE ?>/cart?addCartWithIcon&id_product=<?=$product['id_product']?>" class="shadow rounded">
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
</article>