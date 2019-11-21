<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Thêm sản phẩm</h5>

        <form action="addProduct.php" method="POST">
            <div class="form-group">
                <label for="name_product">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name_product" name="name_product"
                    placeholder="Enter product">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="price_product">Giá sản phẩm</label>
                        <input type="text" class="form-control" id="price_product"
                            name="price_product" placeholder="Enter price">
                    </div>
                    <div class="col">
                        <label for="sale">Giảm giá</label>
                        <input type="text" class="form-control" id="sale" name="sale"
                            placeholder="Sale">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="kind_product">Loại sản phẩm</label>
                        <select class="form-control" id="kind_product" name="kind_product">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <textarea class="form-control" id="description" rows="3" name="description"
                    placeholder="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Thêm mới</button>
        </form>
    </div>
</div>