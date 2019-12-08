<div class="border bg-white p-3">
    <h4 class="mb-3">Danh sách bình luận</h4>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số bình luận</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($statisticalComemnts as $comment): ?>
                <tr>
                    <td><img src="<?=$URL_IMG?>/<?=$comment['img_product']?>" class="rounded" width="45px" height="45px"></td>
                    <td><?=$comment['name_product']?></td>
                    <td><?=$comment['count(id_comment)']?></td>
                    <td><a href="index.php?detailComment&id_product_comment=<?=$comment['id_product_comment']?>" class="btn btn-success">Chi tiết</a></td>
                </trtd>
            <?php endforeach ?>
        </tbody>
    </table>

</div>