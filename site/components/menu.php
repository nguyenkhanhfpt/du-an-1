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