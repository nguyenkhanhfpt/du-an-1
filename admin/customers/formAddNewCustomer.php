<!-- Form thêm người mới -->
<div class="collapse" id="newCustomer">
    <div class="card p-3 mt-3">
        <h4 class="text-center aline-text">THÊM NGƯỜI DÙNG MỚI</h4>
        <form action="index.php" method="POST" enctype="multipart/form-data" onsubmit="return checkPassword()">
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" placeholder="Enter your account" name="id_customer" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" class="form-control" placeholder="Your name" name="name_customer" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="tel" class="form-control" placeholder="Phone number" name="phone" pattern="[0-9]{10,11}">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Your email" name="email" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Your address" name="address" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="role">Vai trò</label>
                            <?php if($_SESSION['role'] == 3) : ?>
                                <select class="form-control" name="role" id="role">
                                    <option value="0">Người dùng</option>
                                    <option value="1">Nhân viên</option>
                                </select>
                            <?php else : ?>
                                <select class="form-control" name="role" id="role">
                                    <option value="0">Người dùng</option>
                                    <option disabled value="1">Nhân viên</option>
                                </select>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
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
            <div class="form-group">
                <label for="img_customer">Ảnh người dùng</label>
                <input type="file" class="form-control-file" id="img_customer" name="img_customer">
            </div>
            <button type="submit" name="addCustomer" class="btn btn-success">Thêm mới</button>
        </form>
    </div>
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