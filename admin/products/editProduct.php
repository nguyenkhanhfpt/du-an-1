<?php if(strlen($message)) : ?>
    <div class="alert alert-success">
        <?=$message?>
    </div>
<?php endif ?>

<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Thay đổi sản phẩm</h5>

        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?=$product['id_product']?>" name="id_product">
            <div class="form-group">
                <label for="name_product">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name_product" name="name_product"
                    placeholder="Enter product" value="<?=$product['name_product']?>">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="price_product">Giá sản phẩm</label>
                        <input type="text" class="form-control" id="price_product" name="price_product"
                            placeholder="Enter price" value="<?=$product['price_product']?>">
                    </div>
                    <div class="col">
                        <label for="sale">Giảm giá</label>
                        <div class="input-group">
                            <input type="text" id="sale" name="sale" class="form-control" placeholder="Sale"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?=$product['sale']?>">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="kind_product">Loại sản phẩm</label>
                        <select class="form-control" id="kind_product" name="kind_product" value="<?=$product['kind_product']?>">
                            <option value="Món chính">Món chính</option>
                            <option value="Đồ ăn vặt">Đồ ăn vặt</option>
                            <option value="Nước uống">Nước uống</option>
                            <option value="Trà sữa">Trà sữa</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlFile1">Thêm ảnh</label>
                        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1"> 
                        <label class="small"><?=$product['img_product']?></label>
                        <input type="hidden" value="<?=$product['img_product']?>" name="old_img">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <textarea class="form-control" id="description" rows="3" name="description"
                    placeholder="Description"><?=$product['description']?></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="editProduct">Thay đổi</button>
        </form>
    </div>
</div>