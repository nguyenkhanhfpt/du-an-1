<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-5 ">
            <img src="<?= $URL_IMG ?>/<?=$viewProduct['img_product']?>" alt="" width="100%" height="470px">
        </div>
        <div class="col-12 col-md-7">
            <h2 class="font-weight-bold mb-3 mt-3"><?=$viewProduct['name_product']?></h2>

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

            <h3 class="font-weight-bold mt-1" style="color: #36A82B">20,000 đ <span class="old-price">25,000 đ</span></h3>
            <hr>
            <p class="text-justify my-4">Aenean id ullamcorper libero. Vestibulum imperdiet nibh.
                Lorem ullamcorper volutpat. Vestibulum lacinia risus. Etiam sagittis ullamcorper volutpat.
                Vestibulum lacinia risus sed ligula malesuada volutpat
            </p>
            <span>Số lượng: </span>
            <form action="">
                <div class="form-group">
                    <div class="d-flex align-items-center">
                        <div class="w-20">
                            <input type="number" value="1" class="form-control form-number" min="1">
                        </div>
                        <div class="w-80">
                            <a href="#" class="btn btn-success rounded-pill addCart">Thêm vào giỏ hàng</a>
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



    <article class="my-3 my-md-5 pb-3">
        <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item mx-md-4">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mô tả</a>
            </li>
            <li class="nav-item mx-md-4">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Bình luận</a>
            </li>
            <li class="nav-item mx-md-4">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ảnh</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane text-justify fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="border mx-3 mx-md-4 mb-4 p-3 rounded shadow-sm">
                    <h4 class="font-weight-bold">Bình luận</h4>
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" value="11" name="ma_hh">
                            <input type="text" class="form-control" placeholder="Nhập bình luận..." name="noi_dung">
                        </div>
                        <input type="submit" value="Đăng tải" name="binh-luan" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
        </div>
    </article>

































    <h2 class="text-center aline-text mt-5">Sản phẩm tương tự</h2>
    <div class="row mt-4">
        <?php foreach ($relatedProducts as $product) : ?>
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


<script>
    $("#rc4").prop("checked", true);
</script>