<?php 
    require '../global.php';
    require '../DAO/functionProduct.php';
    $products = selectProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food & Drinks</title>
    <script src="https://kit.fontawesome.com/a5910b1756.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- MA5 Slider-->
    <script src="<?=$URL_JS?>/jquery-ui.min.js"></script>
    <link href="<?=$URL_CSS?>/ma5slider.min.css" rel="stylesheet" type="text/css">
    <script src="<?=$URL_JS?>/ma5slider.min.js"></script>
    <script>
        $(window).on('load', function () {
            $('.ma5slider').ma5slider();
        });
    </script>

    <link rel="stylesheet" href="<?=$URL_CSS?>/index.css">
</head>

<body>
    <!-- phần hotline -->
    <?php require 'components/hotline.php' ?>

    <!-- Phần menu -->
    <?php require 'components/menu.php' ?>

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
                        <img src="<?=$URL_IMG?>/my.png" width="100%">
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Mỳ quảng Phú Chiêm</a>
                            </div>
                            <!-- Sale price  -->
                            <p class="price mb-0"><span>30.000 đ</span> 20.000 đ</p>
                        </div>
                        <div class="display-card">
                            <a href="#" class="shadow rounded">
                                <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                        <!-- Sale    -->
                        <div class="sale rounded-pill">
                            Sale
                        </div>
                    </div>
                </div>
                <?php foreach($products as $product): ?>
                    <div class="col-6 col-md-3">
                        <div class="border product mb-3">
                            <img src="<?=$URL_IMG?>/<?=$product['img_product']?>" width="100%">
                            <div class="card-body text-center">
                                <div class="name-over">
                                    <a href="#" class="name text-decoration-none"><?=$product['name_product']?></a>
                                </div>
                                <p class="price mb-0"><?=$product['price_product']?> đ</p>
                            </div>
                            <div class="display-card">
                                <a href="#" class="shadow rounded">
                                    <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </article>

    <?php require 'components/footer.php' ?>

</body>

</html>