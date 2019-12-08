<nav class="border-bottom">
    <div class="container">
        <div class="row py-2 py-md-4">
            <div class="col-3 col-md-3">
                <a href="<?=$URL_SITE?>"><img src="<?=$URL_IMG?>/new-logo.png" class="menu-logo"></a>
            </div>
            <div class="col text-menu d-flex justify-content-center">
                <div class="d-none d-md-block">
                    <ul class="nav menu-top text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=$URL_SITE?>">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=$URL_SITE?>/products">ĐỒ ĂN & ĐỒ UỐNG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=$URL_SITE?>/viewPublic">CỘNG ĐỒNG</a>
                        </li>
                        <?php if(!isset($_SESSION['id_customer'])) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    TÀI KHOẢN
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?=$URL_SITE?>/index.php?login" data-target="#login">ĐĂNG
                                        NHẬP</a>
                                    <a class="dropdown-item" href="<?=$URL_SITE?>?signin" data-target="#signin">ĐĂNG
                                        KÝ</a>
                                </div>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>

            <div class="col-5 col-md-1 pt-2 menu-top-end d-flex justify-content-end">
                <div class="cart px-5 pt-1 position-relative">
                    <a href="<?=$URL_SITE?>/cart"><img src="<?=$URL_IMG?>/shopping-cart.svg" width="23px"></a>
                    <span class="badge badge-primary badge-pill bg-transparent text-dark border position-absolute" style="top:-5px"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                </div>
                <?php if(isset($_SESSION['id_customer'])): ?>
                    <div class="pt-1">
                        <a class="nav-link dropdown-toggle p-0 pb-2" style="color: #36a82b" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?=$URL_IMG?>/account.svg" width="23px">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 160px ;">
                            <div class="name-over text-center pb-2 font-weight-bold">
                                <?=$_SESSION['name_customer']?>
                            </div>
                            <a class="dropdown-item" href="<?=$URL_SITE?>/account"><img src="<?=$URL_IMG?>/account.svg" width="18px"> <span>Thông
                                    tin</span></a>
                            <?php if($_SESSION['role'] > 0) : ?>
                                <a class="dropdown-item" href="<?=$URL_ADMIN?>"><img src="<?=$URL_IMG?>/settings.svg" width="18px">
                                    <span>Quản lý</span></a>
                            <?php endif ?>
                            <a class="dropdown-item" onclick="return confirm('Bạn có muốn đăng xuất!')" href="<?=$URL_SITE?>/account/checkLogin.php?logout"><img src="<?=$URL_IMG?>/logout.svg" width="18px"> <span>Đăng
                                    xuất</span></a>
                        </div>
                    </div>
                <?php endif ?>
                <div class="pl-4 d-block d-md-none position-relative">
                    <div class="border p-1" id="menu-button">
                        <img src="<?=$URL_IMG?>/menu-button.svg" width="23px">
                    </div>
                    <div class="border position-absolute sub-menu-button" style="z-index: 10;">
                        <ul class="list-group list-group-flush" style="min-width: 120px;">
                            <li class="list-group-item">
                                <a href="<?=$URL_SITE?>">Trang chủ</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?=$URL_SITE?>/products">Sản phẩm</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?=$URL_SITE?>/viewPublic">Cộng đồng</a>
                            </li>
                            <?php if(!isset($_SESSION['id_customer'])) : ?>
                                <li class="list-group-item">
                                    <a class="nav-link dropdown-toggle p-0" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tài khoản
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown-menu">
                                        <a class="dropdown-item" href="<?=$URL_SITE?>?login" data-target="#login">Đăng
                                            nhập</a>
                                        <a class="dropdown-item" href="<?=$URL_SITE?>?signin" data-target="#signin">Đăng
                                            ký</a>
                                    </div>
                                </li>
                            <?php endif ?>
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
