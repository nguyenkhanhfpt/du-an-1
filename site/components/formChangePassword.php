<div class="container" style="min-height: 250px">
    <form class="w-50 mx-auto mt-4 form" onsubmit="return checkPassword()" action="index.php" method="POST">

        <?php if(strlen($message)) : ?>
            <div class="alert alert-success">
                <?=$message?>
            </div>
        <?php endif ?>

        <div class="form-group">
            <label>Mật khẩu mới</label>
            <input type="password" id="pass1" class="form-control" placeholder="Enter new password" name="newPassword">
        </div>
        <div class="form-group">
            <label>Xác nhận mật khẩu</label>
            <input type="password" id="pass2" class="form-control" placeholder="Password again">
        </div>
        <button type="submit" name="confirmPassword" class="btn btn-success">Xác nhận</button>
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