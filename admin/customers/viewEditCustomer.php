<div class="p-3 bg-white border-bottom d-flex justify-content-between">
    <div class="d-flex">
        <img src="<?= $URL_IMG ?>/imgCustomers/<?=$customer['img_customer']?>" class="rounded" height="70px" width="70px">
        <h5 class="font-weight-bold ml-2"><?=$customer['name_customer']?></h5>
    </div>
    <div>
        <input type="submit" id="btnEditCustomer" class="btn btn-success mr-3 mt-3" value="Lưu">
    </div>
</div>

<div class="card mt-2 p-3">
    <form action="index.php" method="POST" id="formEditCustomer" enctype="multipart/form-data">
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" class="form-control" placeholder="Your name" value="<?=$customer['name_customer']?>" name="name_customer" required>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-md-6">
                    <label>Số điện thoại</label>
                    <input type="tel" class="form-control" value="<?=$customer['phone']?>" readonly>
                </div>
                <div class="col-12 col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" value="<?=$customer['email']?>"  readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" placeholder="Your address" value="<?=$customer['address']?>" name="address" required>
        </div>
        <div class="form-group">
            <label for="role">Vai trò</label>
            <?php if ($_SESSION['role'] == 3) : ?>
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
        <div class="form-group">
            <label for="img_customer">Ảnh người dùng</label>
            <input type="file" class="form-control-file" id="img_customer" name="img_customer">
            <input type="hidden" name="oldImg" value="<?=$customer['img_customer']?>">
            <input type="hidden" name="editCustomer"> <!-- Để xác nhận khi submit form -->
        </div>
    </form>

</div>

<script>
    let btnEditCustomer = document.getElementById('btnEditCustomer');
    let formEditCustomer = document.getElementById('formEditCustomer');

    btnEditCustomer.onclick = () => {
        formEditCustomer.submit();
    }
</script>