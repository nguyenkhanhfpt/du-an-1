<?php require('../global.php') ?>
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
    <div class="hotline py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <p class="mb-0">
                        <img src="<?=$URL_IMG?>/telephone.svg" width="20px">
                        <span class="font-weight-bold pl-2 phone-number">Hotline: 0806 003 429</span>
                    </p>
                </div>
                <div class="col-sm-4 text-center d-none d-md-block">
                    <span class="d-block small">Chào mừng đến với Food & Drink</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Phần menu -->
    <nav>
        <div class="container">
            <div class="row py-2 py-md-4">
                <div class="col-4 col-md-3">
                    <a href=""><img src="<?=$URL_IMG?>/new-logo.png" width="150px"></a>
                </div>
                <div class="col text-menu d-flex justify-content-center">
                    <div class="d-none d-md-block">
                        <ul class="nav menu-top text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#">TRANG CHỦ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ĐỒ ĂN & ĐỒ UỐNG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CỘNG ĐỒNG</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    TÀI KHOẢN
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">ĐĂNG
                                        NHẬP</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signin">ĐĂNG
                                        KÝ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-5 col-md-1 pt-2 menu-top-end d-flex justify-content-end">
                    <div class="cart px-3 pt-1">
                        <img src="<?=$URL_IMG?>/shopping-cart.svg" width="23px">
                    </div>
                    <div class="pt-1">
                        <a class="nav-link dropdown-toggle p-0 pb-2" style="color: #36a82b" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?=$URL_IMG?>/account.svg" width="23px">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 160px ;">
                            <div class="name-over text-center pb-2 font-weight-bold">
                                Nguyễn Khánh
                            </div>
                            <a class="dropdown-item" href="#"><img src="<?=$URL_IMG?>/account.svg" width="18px"> <span>Thông
                                    tin</span></a>
                            <a class="dropdown-item" href="admin/"><img src="<?=$URL_IMG?>/settings.svg" width="18px">
                                <span>Quản lý</span></a>
                            <a class="dropdown-item" href="#"><img src="<?=$URL_IMG?>/logout.svg" width="18px"> <span>Đăng
                                    xuất</span></a>
                        </div>
                    </div>

                    <div class="pl-4 d-block d-md-none position-relative">
                        <div class="border p-2" id="menu-button">
                            <img src="<?=$URL_IMG?>/menu-button.svg" width="23px">
                        </div>
                        <div class="border position-absolute sub-menu-button" style="z-index: 10;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Sản phẩm</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Cộng đồng</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="nav-link dropdown-toggle p-0" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tài khoản
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">Đăng
                                            nhập</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signin">Đăng
                                            ký</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
    <script>
        $(document).ready(function () {
            $("#menu-button").click(function () {
                $(".sub-menu-button").slideToggle("slow")
            });
        });

    </script>




    <!-- Modal đăng nhập & đăng ký -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng ký thành viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Phần header -->
    <header>
        <div class="ma5slider hover-navs hover-dots anim-horizontal outside-dots center-dots inside-navs loop-mode autoplay"
            data-tempo="3000">
            <div class="slides">
                <a><img src="<?=$URL_IMG?>/foody.jpg" alt=""></a>
                <a><img src="<?=$URL_IMG?>/menuhapdan.jpg" alt=""></a>
                <a><img src="<?=$URL_IMG?>/food.jpg" alt=""></a>
                <a><img src="<?=$URL_IMG?>/foody-ts.jpg" alt=""></a>
            </div>
        </div>
    </header>



    <!-- Phần cam kết -->
    <section>
        <div class="row py-3 pt-md-0">
            <div class="col-12 col-md-3 mb-2">
                <div class="overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                    <img src="<?=$URL_IMG?>/shipped.svg" width="50px">
                    <div class="pl-3">
                        <strong class="d-block mb-1">Miễn phí ship</strong>
                        <p class="m-0">Trong khu vực thành phố</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-2">
                <div class="overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                    <img src="<?=$URL_IMG?>/piggy-bank.svg" width="50px">
                    <div class="pl-3">
                        <strong class="d-block mb-1">Tiết kiệm tiền</strong>
                        <p class="m-0">Sản phẩm với giá ưu đãi</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-2">
                <div class="overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                    <img src="<?=$URL_IMG?>/save-money.svg" width="50px">
                    <div class="pl-3">
                        <strong class="d-block mb-1">Đổi trả miễn phí</strong>
                        <p class="m-0">Nếu sản phẩm có vấn đề</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-2">
                <div class="overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                    <img src="<?=$URL_IMG?>/support.svg" width="50px">
                    <div class="pl-3">
                        <strong class="d-block mb-1">Hỗ trợ</strong>
                        <p class="m-0">Nhân viên hổ trợ 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <img src="<?=$URL_IMG?>/banhxeo-1.jpg" width="100%">
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Bánh xèo</a>
                            </div>
                            <p class="price mb-0">20.000 đ</p>
                        </div>
                        <div class="display-card">
                            <a href="#" class="shadow rounded">
                                <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <img src="<?=$URL_IMG?>/banh-kep.png" width="100%">
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Bánh kẹp Đà Nẵng</a>
                            </div>
                            <p class="price mb-0"><span>15.000 đ</span> 10.000 đ</p>
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
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <img src="<?=$URL_IMG?>/trasua.jpg" width="100%">
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Trà sữa đậu đỏ</a>
                            </div>
                            <p class="price mb-0">20.000 đ</p>
                        </div>
                        <div class="display-card">
                            <a href="#" class="shadow rounded">
                                <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <img src="<?=$URL_IMG?>/my.png" width="100%">
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Mỳ quảng Phú Chiêm</a>
                            </div>
                            <p class="price mb-0">20.000 đ</p>
                        </div>
                        <div class="display-card">
                            <a href="#" class="shadow rounded">
                                <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <img src="<?=$URL_IMG?>/my.png" width="100%">
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Mỳ quảng Phú Chiêm</a>
                            </div>
                            <p class="price mb-0">20.000 đ</p>
                        </div>
                        <div class="display-card">
                            <a href="#" class="shadow rounded">
                                <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <img src="<?=$URL_IMG?>/my.png" width="100%">
                        <div class="card-body text-center">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Mỳ quảng Phú Chiêm</a>
                            </div>
                            <p class="price mb-0">20.000 đ</p>
                        </div>
                        <div class="display-card">
                            <a href="#" class="shadow rounded">
                                <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="border product mb-3">
                        <img src="<?=$URL_IMG?>/my.png" width="100%">
                        <div class="card-body text-center product-content">
                            <div class="name-over">
                                <a href="#" class="name text-decoration-none">Mỳ quảng Phú Chiêm</a>
                            </div>
                            <p class="price mb-0">20.000 đ</p>
                        </div>
                        <div class="display-card">
                            <a href="#" class="shadow rounded">
                                <img src="<?=$URL_IMG?>/shopping-cart.svg" alt="" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <footer class="mt-5 border-top pt-4">
        <div class="container">
            <div class="d-md-flex  justify-content-between">
                <div class="text">
                    <h5>Liên hệ với chúng tôi</h5>
                    <p>Địa chỉ: 147 Nguyễn Thị Thập, Liên Chiểu, Đà Nẵng</p>
                    <p>Số điện thoại : 0868 003 429</p>
                    <p>Email: khanh26122000@gmail.com</p>
                </div>
                <div>
                    <img src="<?=$URL_IMG?>/new-logo.png" class="mb-4" width="150px">
                    <p class="font-weight-bold" class="follow">Theo dõi chúng tôi:
                        <i class="fab fa-facebook-f ml-2"></i>
                        <i class="fab fa-instagram ml-2"></i>
                        <i class="fab fa-google-plus-g ml-2"></i>
                    </p>
                </div>
                <div>
                    <h5>Bài đăng trên Instagram</h5>
                    <div class="d-flex">
                        <img src="<?=$URL_IMG?>/trasua.jpg" alt="" height="80px" width="80px">
                        <img src="<?=$URL_IMG?>/my4.jpg" class="mx-2" alt="" height="80px" width="80px">
                        <img src="<?=$URL_IMG?>/banhxeo-1.jpg" alt="" height="80px" width="80px">
                    </div>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>