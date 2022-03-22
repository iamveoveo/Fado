<?php 
view('layout.header-admin');
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Quản lý nhà cung cấp</h1>
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="input-group  flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3"  id="addon-wrapping">Mã nhà cung cấp</span>
                                <input disabled value="<?php echo $manu[0]['ManuID']; ?>" name="ManuID" type="number" style="-webkit-appearance: none;" class="form-control" placeholder="Mã nhà cung cấp" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Tên nhà cung cấp</span>
                                <input value="<?php echo $manu[0]['ManuName']; ?>" name="ManuName" type="text" class="form-control" placeholder="Tên nhà cung cấp" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Đất nước</span>
                                <input value="<?php echo $manu[0]['ManuCountry']; ?>" name="ManuCountry" type="text" class="form-control" placeholder="Đất nước" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Khoảng cách</span>
                                <input value="<?php echo $manu[0]['ManuDistance']; ?>" name="ManuDistance" type="text" class="form-control" placeholder="Khoảng cách" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary" href="<?php echo SITEURL . '?controller=manufacture'; ?>">Trở lại</a>
                            <button name="modify_manu" type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                    <form action="" method="post" enctype="multipart/form-data" class="d-flex">
                        <div class="w-50 justify-content-center d-flex">
                            <img src="assets/img/upload/<?php echo $manu[0]['ManuLogo']; ?>" alt="<?php echo $manu[0]['ManuName']; ?>">
                        </div>
                        <div class="input-group flex-nowrap w-25">
                            <input name="file_image" type="file" class="form-control" placeholder="Logo" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <button name="modify_logo" type="submit" class="btn btn-primary">Lưu</button>
                    </form>

                </div>
            </div>
        </div>
    </main>

<?php 
view('layout.footer-admin');
?>