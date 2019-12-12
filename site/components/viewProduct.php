<?php
    function mysubstr($str,$limit=300){
        if(strlen($str)<=$limit) return $str;
        return mb_substr($str,0,$limit - 3,'UTF-8').'...';
    }
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-5 ">
            <img src="<?= $URL_IMG ?>/<?= $viewProduct['img_product'] ?>" alt="" width="100%" height="470px">
        </div>
        <div class="col-12 col-md-7">
            <h2 class="font-weight-bold mb-3 mt-3"><?= $viewProduct['name_product'] ?></h2>

            <!-- Phần đánh giá -->
            <div class="page">
                <div class="page__demo">
                    <div class="page__group">
                        <div class="rating">
                            <input type="radio" name="rating-star" class="rating__control" id="rc1" value="1">
                            <input type="radio" name="rating-star" class="rating__control" id="rc2" value="2">
                            <input type="radio" name="rating-star" class="rating__control" id="rc3" value="3">
                            <input type="radio" name="rating-star" class="rating__control" id="rc4" value="4">
                            <input type="radio" name="rating-star" class="rating__control" id="rc5" value="5">
                            <label for="rc1" class="rating__item">
                                <svg class="rating__star">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </label>
                            <label for="rc2" class="rating__item">
                                <svg class="rating__star">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </label>
                            <label for="rc3" class="rating__item">
                                <svg class="rating__star">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </label>
                            <label for="rc4" class="rating__item">
                                <svg class="rating__star">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </label>
                            <label for="rc5" class="rating__item">
                                <svg class="rating__star">
                                    <use xlink:href="#star"></use>
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                <symbol id="star" viewBox="0 0 26 28">
                    <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z" />
                </symbol>
            </svg>

            <?php if ($viewProduct['sale'] > 0) : ?>
                <h3 class="font-weight-bold mt-1" style="color: #36A82B"><?= number_format(priceAfterSale($viewProduct['sale'], $viewProduct['price_product'])) ?> đ <span class="old-price"><?= number_format($viewProduct['price_product']) ?> đ</span></h3>
            <?php else : ?>
                <h3 class="font-weight-bold mt-1" style="color: #36A82B"><?= number_format($viewProduct['price_product']) ?> đ</h3>
            <?php endif ?>
            <hr>
            <p class="text-justify my-4">
                <?php if(strlen($viewProduct['description']) > 0) : ?>
                    <?= mysubstr($viewProduct['description'], 200); ?>
                <?php else : ?>
                    <p>Không có mô tả</p>
                <?php endif ?>
            </p>
            <span>Số lượng: </span>
            <form action="./cart/" method="post">
                <div class="form-group">
                    <div class="d-flex align-items-center">
                        <div class="w-20">
                            <input type="number" value="1" name="quantity_product" class="form-control form-number" min="1">
                        </div>
                        <div class="w-80">
                            <input type="hidden" name="id_product" value="<?= $viewProduct['id_product'] ?>">
                            <input type="hidden" name="img_product" value="<?= $viewProduct['img_product'] ?>">
                            <input type="hidden" name="name_product" value="<?= $viewProduct['name_product'] ?>">
                            <input type="hidden" name="price_product" value="<?= priceAfterSale($viewProduct['sale'], $viewProduct['price_product']) ?>">
                            <input type="submit" name="addCart" class="btn btn-success rounded-pill addCart" value="Thêm vào giỏ hàng">
                        </div>
                    </div>
                </div>
            </form>
            <ul class="list-unstyled d-flex mt-4 mb-3 mt-md-5">
                <li class="text-uppercase mr-4 ">Chia sẽ sản phẩm:</li>
                <li class="mr-4"><a href="javascript:void(0);" class="fab fa-facebook-f text-decoration-none text-primary"></a></li>
                <li class="mr-4"><a href="javascript:void(0);" class="fab fa-google-plus-g text-decoration-none text-danger "></a></li>
                <li class="mr-4"><a href="javascript:void(0);" class="fab fa-instagram text-decoration-none text-dark"></a></li>
            </ul>
        </div>
    </div>

    <?php require 'components/tabComment.php'; ?>


































    <h2 class="text-center aline-text mt-5">Sản phẩm tương tự</h2>
    <div class="row mt-4">
        <?php foreach ($relatedProducts as $product) : ?>
            <div class="col-6 col-md-3">
                <div class="border product mb-3">
                    <a href="<?= $URL_SITE ?>?viewProduct&id_product=<?= $product['id_product'] ?>">
                        <img src="<?= $URL_IMG ?>/<?= $product['img_product'] ?>" width="100%">
                    </a>
                    <div class="card-body text-center">
                        <div class="name-over">
                            <a href="<?= $URL_SITE ?>?viewProduct" class="name text-decoration-none"><?= $product['name_product'] ?></a>
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


<script>
    $("#rc4").prop("checked", true);
</script>