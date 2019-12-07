<?php if(strlen($message)) : ?>
    <div class="alert alert-success" role="alert">
        <?=$message?>
    </div>
<?php endif ?>

<div class="border p-3 bg-white">
    <h3 class="text-center aline-text">Thay đổi loại hàng</h3>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên loại hàng</label>
            <input type="text" value="<?=$kind['name_kind']?>" class="form-control" name="name_kind" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <input type="hidden" name="id_kind" value="<?=$kind['id_kind']?>">

        <button type="submit" name="editKind" class="btn btn-success">Thay đổi</button>
    </form>
</div>

<a class="btn btn-success mt-3" href="<?=$URL_ADMIN?>/kind_products">Xem danh sách</a>