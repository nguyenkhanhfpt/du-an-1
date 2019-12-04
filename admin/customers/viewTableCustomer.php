<?php if(strlen($message)) : ?>
    <div class="alert alert-success">
        <?=$message?>
    </div>
<?php endif ?>

    <!-- Danh sách người dùng -->
<div class="card">
    <div class="card-body">
        <h5>Danh sách người dùng</h5>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) : ?>
                        <tr>
                            <td scope="row"><img src="<?= $URL_IMG ?>/imgCustomers/<?= $customer['img_customer'] ?>" class="rounded-circle" height="45px" width="45px"></td>
                            <td>
                                <?= $customer['name_customer'] ?>
                            </td>
                            <td><?= $customer['email'] ?></td>
                            <td><?= $customer['phone'] ?></td>
                            <td><?= $customer['address'] ?></td>
                            <td>
                                <a class="btn btn-success rounded-pill button " href="index.php?viewDetailCustomer&id_customer=<?= $customer['id_customer'] ?>" role="button">Chi tiết</a>
                                <a class="btn btn-success rounded-pill button " href="index.php?viewEditCustomer&id_customer=<?= $customer['id_customer'] ?>" role="button">Chỉnh sửa</a>
                                <a class="btn btn-success rounded-pill button" href="index.php?deleteCustomer&id_customer=<?= $customer['id_customer'] ?>" role="button" onclick="return confirm('Bạn có muốn xóa người dùng này ?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Menu để chọn -->
<div class="mt-3">
    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#newCustomer" aria-expanded="false" aria-controls="collapseExample">
        Thêm người dùng mới
    </button>
    <?php if ($_SESSION['role'] > 1) : ?>
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Danh sách nhân viên
        </button>
    <?php endif ?>
</div>


    <!-- Hiển thị bảng danh sách nhân viên -->
<div class="collapse" id="collapseExample">
    <div class="card mt-3">
        <div class="card-body">
            <h5>Danh sách nhân viên</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($employees as $employee) : ?>
                            <tr>
                                <td scope="row"><img src="<?= $URL_IMG ?>/imgCustomers/<?= $employee['img_customer'] ?>" class="rounded-circle" height="45px" width="45px"></td>
                                <td>
                                    <?= $employee['name_customer'] ?>
                                </td>
                                <td><?= $employee['email'] ?></td>
                                <td><?= $employee['phone'] ?></td>
                                <td><?= $employee['address'] ?></td>
                                <td>
                                    <a class="btn btn-success rounded-pill button " href="index.php?viewEditCustomer&id_customer=<?= $employee['id_customer'] ?>" role="button">Chỉnh sửa</a>
                                    <a class="btn btn-success rounded-pill button" href="index.php?deleteCustomer&id_customer=<?= $employee['id_customer'] ?>" role="button" onclick="return confirm('Bạn có muốn xóa người dùng này ?')">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Form thêm người mới -->
<?php require 'formAddNewCustomer.php'; ?>