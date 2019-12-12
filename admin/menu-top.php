<div class="menu-top border-bottom d-flex justify-content-end py-2 pr-4">
    <a class="nav-link dropdown-toggle p-0 pb-2" style="color: #36a82b" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?=$URL_IMG?>/imgCustomers/<?=$_SESSION['img_customer']?>" width="40px" class="rounded-circle">
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 160px ;">
        <div class="name-over text-center pb-2 font-weight-bold">
            <?=$_SESSION['name_customer']?>
        </div>
        <a class="dropdown-item" href="<?=$URL_SITE?>/account"><img src="<?=$URL_IMG?>/account.svg" width="18px"> <span>Thông
                tin</span></a>
        <a class="dropdown-item" onclick="return confirm('Bạn có muốn đăng xuất!')" href="<?=$URL_SITE?>/account/checkLogin.php?logout"><img src="<?=$URL_IMG?>/logout.svg" width="18px"> <span>Đăng
                xuất</span></a>
    </div>
</div>