<?php 
view('layout.header-admin');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Quản lý sản phẩm</h1>
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
                                <th>Giá</th>
                                <th>số lượng</th>
                                <th>HÌnh ảnh</th>
                                <th>Sửa </th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($prod as $row): ?>
                                <tr>
                                    <td><?php echo $row['ProdID']; ?></td>
                                    <td><?php echo $row['ProdName']; ?></td>
                                    <td><?php echo $row['ProdPrice']; ?></td>
                                    <td><?php echo $row['ProdInStock']; ?></td>
                                    <td><img src="assets/img/upload/<?php echo $row['ProdImg']; ?>" alt="<?php echo $row['ProdID']; ?>" style="width:20%;"></td>
                                    <td>
                                        <a href="<?php echo SITEURL . '?controller=product&action=modify&id=' . $row['ProdID'] ?>" >
                                            <button type="button" class="btn btn-outline-success btn-sm "style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <button name="delete-btn" id="<?php echo SITEURL . '?controller=product&action=remove&id=' . $row['ProdID'] ?>" type="button" class="btn btn-outline-dark btn-sm" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#detele">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>    
                                </tr>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                    <!-- add acc -->
                    <div class="d-flex flex-row-reverse mt-2">
                        <button type="button" class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#add">Thêm sản phẩm</button>
                    </div>
                    <!-- Button trigger modal -->
                </div>

                <!-- Modal -->
                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm loại hàng</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- body -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="input-group  flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3"  id="addon-wrapping">Mã sản phẩm</span>
                                        <input required name="ProdID" type="text" style="-webkit-appearance: none;" class="form-control" placeholder="Mã sản phẩm" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Tên sản phẩm</span>
                                        <input name="ProdName" type="text" class="form-control" placeholder="Tên sản phẩm" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Tình trạng</span>
                                        <input name="ProdStatus" type="text" class="form-control" placeholder="Tình trạng" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Giá</span>
                                        <input name="ProdPrice" type="number" class="form-control" placeholder="Giá" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Số lượng</span>
                                        <input name="ProdInStock" type="number" class="form-control" placeholder="Số lượng" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Nhà sản xuất</span>
                                        <select name="ManuID" class="form-control" required>
                                            <option value=null selected disabled> --Chọn Nhà sản xuẩt--</option>
                                            <?php foreach($manu as $row): ?>
                                                <option value="<?php echo $row['ManuID'];?>"><?php echo $row['ManuName'];?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Hình ảnh</span>
                                        <input name="file_image" type="file" class="form-control" placeholder="Hình ảnh" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <button name="add_prod" type="submit" class="btn btn-primary">Lưu</button>
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