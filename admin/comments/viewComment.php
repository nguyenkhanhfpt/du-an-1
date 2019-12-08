<div class="border bg-white p-3">
    <h4 class="mb-3">Bình luận của sản phẩm <span class="text-success"><?=$product['name_product']?></span></h4>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Người bình luận</th>
                <th>Tiêu đề</th>
                <th>Nội dung bình luận</th>
                <th>Đánh giá</th>
                <th>Ảnh bình luận</th>
                <th>Ngày bình luận</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($comments as $comment): ?>
                <tr>
                    <td>
                        <img src="<?=$URL_IMG?>/imgCustomers/<?=$comment['img_customer']?>" width="45px" height="45px" class="rounded-circle">
                        <?=$comment['name_customer']?>
                    </td>
                    <td><?=$comment['title_comment']?></td>
                    <td><?=$comment['content_comment']?></td>
                    <td><?=$comment['review']?> sao</td>
                    <td>
                        <?php if(strlen($comment['img_comment'])): ?>
                            <img src="<?=$URL_IMG?>/imgComment/<?=$comment['img_comment']?>" class="rounded" width="65px" height="65px">
                        <?php endif ?>
                    </td>
                    <td><?=$comment['date_comment']?></td>
                    <td><a href="index.php?deleteComment&id_comment=<?=$comment['id_comment']?>" onclick="return confirm('Bạn có muốn xóa bình luận ?')" class="btn btn-success">Xóa</a></td>
                </trtd>
            <?php endforeach ?>
        </tbody>
    </table>

</div>