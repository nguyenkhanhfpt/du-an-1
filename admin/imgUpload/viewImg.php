<div class="row" style="min-height: 400px">
    <?php $count = 0; ?>
    <?php foreach ($imgs as $img) : $count++; ?>
        <div class="col-6 col-md-3 mb-3 images-img">
            <div class="img img-bot">
                <a href="<?= $URL_IMG ?>/imgUpload/<?= $img['img_upload'] ?>"><img src="<?= $URL_IMG ?>/imgUpload/<?= $img['img_upload'] ?>" class="rounded shadow-sm" height="270px" width="100%"></a>
            </div>
            <span class="badge badge-primary badge-pill bg-white text-dark border position-absolute" style="top:-5px; right: 10px;"><a href="index.php?deleteImgUpload&id_img=<?= $img['id_img'] ?>" class="text-danger text-decoration-none">X</a></span>
        </div>
    <?php endforeach ?>
    <?php if ($count == 0) : ?>
        <p>Không có ảnh tải lên từ cộng đồng</p>
    <?php endif ?>
</div>