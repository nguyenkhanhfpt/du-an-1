<div class="container">
    <!-- <h4 class="mt-4 mb-2 text-center">Được tải lên từ cộng đồng</h4> -->
    <div class="row mt-4" style="min-height: 400px">
        <?php $count = 0; ?>
        <?php foreach($imgs as $img): $count++; ?>
            <div class="col-6 col-md-3 mb-3">
                <div class="img img-bot">
                    <a href="<?= $URL_IMG ?>/imgUpload/<?=$img['img_upload']?>"><img src="<?= $URL_IMG ?>/imgUpload/<?=$img['img_upload']?>" class="w-100 shadow-sm rounded"></a>
                </div>
            </div>
        <?php endforeach ?>
        <?php if($count == 0) : ?>
            <p>Không có ảnh tải lên từ cộng đồng</p>
        <?php endif ?>
    </div>
</div>