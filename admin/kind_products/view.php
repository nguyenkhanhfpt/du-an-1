<?php if(strlen($message)) : ?>
    <div class="alert alert-success" role="alert">
        <?=$message?>
    </div>
<?php endif ?>




<div class="border p-3 bg-white">
    <h3 class="text-center aline-text">Thêm loại hàng</h3>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên loại hàng</label>
            <input type="text" class="form-control" placeholder="Nhập loại" name="name_kind" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" name="addKind" class="btn btn-success">Thêm mới</button>
    </form>
</div>

<p class="mt-4">
    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
       Danh sách loại hàng
    </button>
</p>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên loại hàng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $cost=1; ?> 
                <?php foreach($kindProducts as $kind): ?>
                <tr>
                    <td><?=$cost++ ?></td>
                    <td><?=$kind['name_kind']?></td>
                    <td>
                        <a href="index.php?delete&id_kind=<?=$kind['id_kind']?>" onclick="return confirm('Bạn có muốn xóa không ?')" class="btn btn-success">Xóa</a>
                        <a href="index.php?edit&id_kind=<?=$kind['id_kind']?>"class="btn btn-success">Sửa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>