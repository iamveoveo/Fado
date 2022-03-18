<?php 
view('layout.header-admin');
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Quản lý loại hàng</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Chỉnh sửa
                    <?php
                        view('layout.alert');
                    ?>
                </div>
                <div class="card-body">
                    <!-- body -->
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="input-group  flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3"  id="addon-wrapping">Mã giảm giá</span>
                                <input value="<?php echo $voucher[0]['VouID']; ?>" disabled name="VouID" type="text" class="form-control" placeholder="Mã giảm giá" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Tên mã</span>
                                <input value="<?php echo $voucher[0]['VouName']; ?>" name="VouName" type="text" class="form-control" placeholder="Tên mã" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Phần trăm giảm giá</span>
                                <input value="<?php echo $voucher[0]['Discount']; ?>" name="Discount" type="number" class="form-control" placeholder="Phần trăm giảm" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="row">
                                <div class="d-flex flex-nowrap mb-2 col-6">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Bắt đầu</span>
                                    <input required value="<?php echo $voucher[0]['StartTime']; ?>" name="StartTime" type="date" class="form-control" placeholder="Ngày bắt đầu" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="d-flex flex-nowrap mb-2 col-6">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Kết thúc</span>
                                    <input required value="<?php echo $voucher[0]['EndTime']; ?>" name="EndTime" type="date" class="form-control" placeholder="Ngày kết thúc" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Miêu tả</span>
                                <textarea name="VouDes"  type="text" class="form-control"><?php echo $voucher[0]['VouDes']; ?></textarea>
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Mã sản phẩm</span>
                                <input value="<?php echo $voucher[0]['ProdID']; ?>" name="ProdID" type="text" class="form-control" placeholder="Tên mã" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo SITEURL . '?controller=voucher'; ?>" >    
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            </a>
                            <button name="modify_voucher" type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>

<?php 
view('layout.footer-admin');
?>