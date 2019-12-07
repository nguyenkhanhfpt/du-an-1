<article class="my-3 my-md-5 pb-3">
    <!-- Link của tab -->
    <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item mx-md-4">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mô tả</a>
        </li>
        <li class="nav-item mx-md-4">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Bình luận</a>
        </li>
        <li class="nav-item mx-md-4">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ảnh</a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <!-- Phần mô tả -->
        <div class="tab-pane text-justify fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </div>

        <!-- Phần bình luận -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="border rounded py-3 px-3 mb-4 comment">

                <?php if (strlen($err)) : ?>
                    <div class="alert alert-danger">
                        <?= $err ?>
                    </div>
                <?php endif ?>

                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-2">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Đánh giá</h5>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="review1" value="5" name="review" class="custom-control-input">
                                        <label class="custom-control-label" for="review1">Tuyệt vời</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="review2" value="4" name="review" class="custom-control-input">
                                        <label class="custom-control-label" for="review2">Tốt</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="review3" value="3" name="review" class="custom-control-input">
                                        <label class="custom-control-label" for="review3">Khá tốt</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="review4" value="2" name="review" class="custom-control-input">
                                        <label class="custom-control-label" for="review4">Trung bình</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="review5" value="1" name="review" class="custom-control-input">
                                        <label class="custom-control-label" for="review5">Kém</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 pl-md-0">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="form-group mb-2 border-bottom">
                                        <input type="text" name="title_comment" class="form-control border-0" placeholder="Nhập tiêu đề bình luận" required>
                                    </div>
                                    <div class="form-group mb-1">
                                        <textarea name="content_comment" class="form-control border-0" rows="5" placeholder="Nhập nội dung bình luận" required></textarea>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <!-- Lấy giá trị id_product -->
                                        <input type="hidden" name="id_product" value="<?= $viewProduct['id_product'] ?>">
                                        <input type="file" name="img_comment" id="add-img" class="d-none">
                                        <input type="button" id="btn-add-img" value="+ Thêm ảnh" class="btn btn-dark">
                                        <input type="submit" name="submitComment" value="Đăng bài viết" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Hiển thị bình luận -->
            <div class="comment p-3">
                <?php $countComment = 0; ?>

                <?php foreach ($comments as $comment) : $countComment++; ?>
                    <div class="mb-3 w-100 mx-auto p-3 card border-0 box-comment">
                        <div class="d-flex">
                            <img src="<?= $URL_IMG ?>/imgCustomers/<?= $comment['img_customer'] ?>" width="45px">
                            <div class="pl-2">
                                <p class="mb-1 font-weight-bold"><?= $comment['name_customer'] ?></p>
                                <p class="small m-0"><?= $comment['date_comment'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <h6 class="font-weight-bold" style="font-size: 18px;"><?= $comment['title_comment'] ?></h6>
                        <p><?= $comment['content_comment'] ?></p>
                        <?php if (strlen($comment['img_comment'])) : ?>
                            <div class="" style="max-height: 800px;overflow: hidden;">
                                <img src="<?= $URL_IMG ?>/imgComment/<?= $comment['img_comment'] ?>" class="" width="100%" height="auto">
                            </div>
                        <?php endif ?>
                        <?php if(isset($_SESSION['id_customer'])) : ?>
                            <?php if ($comment['id_customer_comment'] == $_SESSION['id_customer']) : ?>
                                <a href="index.php?deleteComment&id_comment=<?= $comment['id_comment'] ?>&id_product=<?= $viewProduct['id_product'] ?>" class="mt-2 text-danger text-decoration-none" onclick="return confirm('Bạn có muốn xóa bình luận!')">Xóa bình luận</a>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
                <?php if ($countComment == 0) {
                    echo "Không có bình luận nào!";
                }
                ?>
            </div>
        </div>

        <!-- Phần xem ảnh -->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <?php if (strlen($errUpload)) : ?>
                <div class="alert alert-danger">
                    <?= $errUpload ?>
                </div>
            <?php endif ?>
            <div class="row">
                <?php foreach ($allImgUpload as $img) : ?>
                    <div class="col-4 col-md-2 mb-3 images-img">
                        <img src="<?= $URL_IMG ?>/imgUpload/<?=$img['img_upload']?>" class="rounded shadow-sm" width="100%">
                        <?php if ($img['id_customer'] == $_SESSION['id_customer']) : ?>
                            <span class="badge badge-primary badge-pill bg-white text-dark border position-absolute" style="top:-5px; right: 10px;"><a href="index.php?deleteImgUpload&id_img=<?=$img['id_img']?>&id_product=<?= $viewProduct['id_product']?>" class="text-danger text-decoration-none">X</a></span>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
                <div class="col-4 col-md-2 mb-3">
                    <form action="index.php" method="POST" enctype="multipart/form-data" class="h-100">
                        <input type="hidden" name="id_product" value="<?= $viewProduct['id_product'] ?>">
                        <input type="hidden" name="id_customer" value="<?= $_SESSION['id_customer'] ?>">
                        <input type="file" name="img_upload" id="add-img2" class="d-none">
                        <input type="button" id="btn-add-img2" class="btn btn-secondary w-100 btn-uploadImg" value="Đăng ảnh">
                        <input type="submit" class="d-none" id="form_upload_img" name="uploadImg">
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>


<script>
    // thêm ảnh ở tab bình luận
    document.getElementById('btn-add-img').onclick = () => {
        document.getElementById('add-img').click();
    };

    // thêm ảnh ở tab ảnh
    document.getElementById('btn-add-img2').onclick = () => {
        document.getElementById('add-img2').click();
    }

    let form_upload_img = document.getElementById('form_upload_img');
    let add_img = document.getElementById('add-img2');


    add_img.onchange = () => {
        let check = confirm('Bạn có muốn đăng ảnh lên!');
        if (check == true) {
            form_upload_img.click();
        }
    }
</script>