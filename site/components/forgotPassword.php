<div class="container">
    <h2 class="text-center my-3 aline-text">Quên mật khẩu</h2>
    <form class="w-50 mx-auto form" action="index.php" method="POST">
        
        <?php if(strlen($err)) : ?>
            <div class="alert alert-danger">
                <?=$err?>
            </div>
        <?php endif ?>

        <div class="form-group">
            <label>Tài khoản</label>
            <input type="text" class="form-control" placeholder="Enter your account" name="id_customer" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <button type="submit" name="confirmAccount" class="btn btn-success">Xác nhận</button>
    </form>
</div>