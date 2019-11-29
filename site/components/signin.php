<div class="container">
    <h2 class="text-center my-3 aline-text">Đăng ký tài khoản</h2>

    <form class="w-50 mx-auto form" action="account/signin.php" method="POST" onsubmit="return checkPassword()">

        <?php if(strlen($message)) : ?>
            <div class="alert alert-success">
                <?=$message?>
            </div>
        <?php endif ?>

        <div class="form-group">
            <label>Tên đăng nhập</label>
            <input type="text" class="form-control" placeholder="Enter your account" name="id_customer" required>
        </div>
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" class="form-control" placeholder="Your name" name="name_customer" required>
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="tel" class="form-control" placeholder="Phone number" name="phone" pattern="[0-9]{10,11}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Your email" name="email" required>
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" placeholder="Your address" name="address" required>
        </div>
        <div class="form-group">
            <label>Giới tính</label>
            <div class="row">
                <div class="col">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="gender" value="Nam" class="custom-control-input" required>
                        <label class="custom-control-label" for="customRadioInline1">Nam</label>
                    </div>
                </div>
                <div class="col">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="gender" value="Nữ" class="custom-control-input" required>
                        <label class="custom-control-label" for="customRadioInline2">Nữ</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" id="pass1" class="form-control" placeholder="Password" name="password" required pattern=".{6,}">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" id="pass2" class="form-control" placeholder="Password again" name="password" required pattern=".{6,}">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group form-check custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Lưu mật khẩu</label>
        </div>

        <button type="submit" class="btn btn-success">Đăng ký</button>
    </form>
</div>


<script>
    function checkPassword() {
        let pass1 = document.getElementById('pass1').value;
        let pass2 = document.getElementById('pass2').value;

        if(pass2 !== pass1) {
            alert('Mật khẩu xác nhận không khớp');
            return false;
        }
        else{
            return true;
        }
    }
</script>
