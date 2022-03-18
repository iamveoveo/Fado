<?php 
view('layout.header-admin');
$date   = new DateTime('now');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Quản lý loại hàng</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Bảng dữ liệu
                    <?php
                        view('layout.alert');
                    ?>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">

                        <!-- table -->
                        <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên</th>
                                <th>Giảm</th>
                                <th>Sản phẩm áp dụng</th>
                                <th>Hiệu lực</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($vouchers as $row): ?>
                                <tr>
                                    <td><?php echo $row['VouID']; ?></td>
                                    <td><?php echo $row['VouName']; ?></td>
                                    <td><?php echo $row['Discount']; ?></td>
                                    <td><?php echo $row['ProdID']; ?></td>
                                    <td><?php 
                                            $date1  = new DateTime($row['StartTime']);
                                            $date2  = new DateTime($row['EndTime']);

                                            echo ($date1<=$date && $date2>=$date) ? '<i class="fa-solid fa-square-check text-success"></i>' : '<i class="fa-solid fa-square-xmark"></i>' ;
                                        ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL . '?controller=voucher&action=modify&id=' . $row['VouID'] ?>" >
                                            <button type="button" class="btn btn-outline-success btn-sm "style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <button name="delete-btn" id="<?php echo SITEURL . '?controller=voucher&action=remove&id=' . $row['VouID'] ?>" type="button" class="btn btn-outline-dark btn-sm" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#detele">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>    
                                </tr>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                    <!-- add acc -->
                    <div class="d-flex flex-row-reverse mt-2">
                        <button type="button" class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#add">Thêm loại hàng</button>
                    </div>
                    <!-- Button trigger modal -->
                </div>

                <!-- Modal -->
                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm mã giảm giá</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- body -->
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="input-group  flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3"  id="addon-wrapping">Mã giảm giá</span>
                                        <input name="VouID" type="text" class="form-control" placeholder="Mã giảm giá" aria-label="Username" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Tên mã</span>
                                        <input name="VouName" type="text" class="form-control" placeholder="Tên mã" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Phần trăm giảm giá</span>
                                        <input name="Discount" type="number" class="form-control" placeholder="Phần trăm giảm" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="row">
                                        <div class="d-flex flex-nowrap mb-2 col-6">
                                            <span class="input-group-text col-md-3" id="addon-wrapping">Bắt đầu</span>
                                            <input required name="StartTime" type="date" class="form-control" placeholder="Ngày bắt đầu" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="d-flex flex-nowrap mb-2 col-6">
                                            <span class="input-group-text col-md-3" id="addon-wrapping">Kết thúc</span>
                                            <input required name="EndTime" type="date" class="form-control" placeholder="Ngày kết thúc" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Miêu tả</span>
                                        <textarea name="VouDes"  type="text" class="form-control"></textarea>
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Mã sản phẩm</span>
                                        <input name="ProdID" type="text" class="form-control" placeholder="Tên mã" aria-label="Username" aria-describedby="addon-wrapping" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <button name="add_voucher" type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Modal delete -->
                <div class="modal fade" id="detele" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xóa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="margin:auto;">
                                <a href="#" id="delete">
                                    <button type="button" class="btn btn-primary mx-3  ">Xóa</button>                                       
                                </a>
                                <button type="button" class="btn btn-secondary mx-3" data-bs-dismiss="modal">Hủy</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>

<?php 
view('layout.footer-admin');
?>