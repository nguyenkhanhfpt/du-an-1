<div class="container">
    <h2 class="text-center my-3 aline-text">Đăng nhập</h2>
    <form class="w-50 mx-auto form" action="account/checkLogin.php" method="POST">

        <?php if(strlen($message)) : ?>
            <div class="alert alert-success">
                <?=$message?>
            </div>
        <?php endif ?>

        <?php if(strlen($err)) : ?>
            <div class="alert alert-danger">
                <?=$err?>
            </div>
        <?php endif ?>

        <div class="form-group">
            <label>Tài khoản</label>
            <input type="text" class="form-control" placeholder="Enter your account" name="id_customer" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group form-check custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="saveAccount" id="save-info">
            <label class="custom-control-label" for="save-info">Lưu mật khẩu</label>
            <span class="small d-block float-md-right">Quên mật khẩu? Nhấn vào <a href="">đây</a></span>
        </div>
        
        <button type="submit" name="login" class="btn btn-success">Đăng nhập</button>
    </form>
</div>