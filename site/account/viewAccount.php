<div class="container">
    <div class="row mt-5" style="min-height: 400px">
        <div class="col-12 col-md-3">
            <div class="d-flex">
                <img src="<?= $URL_IMG ?>/banhxeo.jpg" class="rounded-circle" width="65px" height="65px">
                <div class="ml-2">
                    <p class="mb-1">Thông tin tài khoản</p>
                    <h6 style="font-size: 18px" class="font-weight-bold">Nguyễn Khánh</h6>
                </div>
            </div>

            <!-- menu boostrap tab -->
            <div class="nav flex-column nav-pills mt-3 mb-4" id="account" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-home" aria-selected="true" style="font-size: 17px;">Thông tin tài khoản</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="font-size: 17px;">Thay đổi mật khẩu</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-buy" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="font-size: 17px;">Lịch sử mua hàng</a>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <!-- Nội dung của boostrap tab -->
            <div class="tab-content" id="account">
                <!-- Phần thông tin tài khoản -->
                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h5>Thông tin tài khoản</h5>
                    <div class="border bg-white rounded  p-3">
                        <form>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Họ tên </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_customer" id="name" value="Nguyễn Khánh">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" value="0932838783" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" value="khanh26122000@gmail.com" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address" value="Liên Chiểu, Đà Nẵng">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img" class="col-sm-2 col-form-label">Thay đổi ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img_customer" class="form-control-file" id="img">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <input type="submit" name="changeProfile" class="btn btn-success" value="Cập nhật">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Phần thay đổi mật khẩu -->
                <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h5>Thay đổi mật khẩu</h5>
                    <div class="border bg-white rounded  p-3">
                        <form>
                            <div class="form-group row">
                                <label for="oldPass" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="oldPass" name="oldPass" placeholder="Old password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="newPass" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="newPass" placeholder="Password must be over 6 characters">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" placeholder="Enter password again">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <input type="submit" name="changePassword" class="btn btn-success" value="Cập nhật">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Phần lịch sử mua hàng -->
                <div class="tab-pane fade" id="v-pills-buy" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h5>Lịch sử mua hàng</h5>
                    <div class="border rounded p-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Ngày mua</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"><img src="/du-an-1/images/trasua.jpg" class="rounded" height="50px" width="50px"> Trà sữa đậu đỏ</td>
                                    <td>20,000 đ</td>
                                    <td>6</td>
                                    <td>2019-12-08 15:38:03</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>






























        </div>
    </div>
</div>