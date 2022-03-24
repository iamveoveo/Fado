<?php 
view('layout.header-admin');
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Quản lý sản phẩm</h1>
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
                                <span class="input-group-text col-md-3"  id="addon-wrapping">Mã sản phẩm</span>
                                <input required value="<?php echo $prod[0]['ProdID']; ?>" name="ProdID" type="text" style="-webkit-appearance: none;" class="form-control" placeholder="Mã sản phẩm" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Tên sản phẩm</span>
                                <input value="<?php echo $prod[0]['ProdName']; ?>" name="ProdName" type="text" class="form-control" placeholder="Tên sản phẩm" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Tình trạng</span>
                                <input value="<?php echo $prod[0]['ProdStatus']; ?>" name="ProdStatus" type="text" class="form-control" placeholder="Tình trạng" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Giá</span>
                                <input value="<?php echo $prod[0]['ProdPrice']; ?>" name="ProdPrice" type="number" class="form-control" placeholder="Giá" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Số lượng</span>
                                <input value="<?php echo $prod[0]['ProdInStock']; ?>" name="ProdInStock" type="number" class="form-control" placeholder="Số lượng" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Nhà sản xuất</span>
                                <select name="ManuID" class="form-control" required>
                                    <option value=null selected disabled> --Chọn Nhà sản xuẩt--</option>
                                    <?php foreach($manu as $row): ?>
                                        <option <?php echo $prod[0]['ManuID']==$row['ManuID'] ? 'selected' : ''; ?> value="<?php echo $row['ManuID'];?>"><?php echo $row['ManuName'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Hình ảnh</span>
                                <input name="file_image" type="file" class="form-control" placeholder="Hình ảnh" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary" href="<?php echo SITEURL . '?controller=product'; ?>">Trở lại</a>
                            <button name="modify_prod" type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                    <h3>Chi tiết sản phẩm</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="input-group  flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3"  id="addon-wrapping">Series</span>
                                <input value="<?php echo $prod_de[0]['Series']; ?>" name="Series" type="text" style="-webkit-appearance: none;" class="form-control" placeholder="Series" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Khối lượng</span>
                                <input value="<?php echo $prod_de[0]['Weight']; ?>" name="Weight" type="number" class="form-control" placeholder="Khối lượng" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Kích thước</span>
                                <input value="<?php echo $prod_de[0]['Dimension']; ?>" name="Dimension" type="text" class="form-control" placeholder="Kích thước" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Chất liệu</span>
                                <input value="<?php echo $prod_de[0]['Material']; ?>" name="Material" type="text" class="form-control" placeholder="Chất liệu" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Màu sắc</span>
                                <input value="<?php echo $prod_de[0]['Color']; ?>" name="Color" type="text" class="form-control" placeholder="Màu sắc" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">ASIN</span>
                                <input value="<?php echo $prod_de[0]['ASIN']; ?>" name="ASIN" type="text" class="form-control" placeholder="ASIN" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">UPC</span>
                                <input value="<?php echo $prod_de[0]['UPC']; ?>" name="UPC" type="text" class="form-control" placeholder="UPC" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2 ">
                                <span class="input-group-text col-md-3" id="addon-wrapping">Miêu tả</span>
                                <textarea name="Description" class="form-control"><?php echo $prod_de[0]['Description']; ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary" href="<?php echo SITEURL . '?controller=product'; ?>">Trở lại</a>
                            <button name="modify_prod_detail" type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                    <h3>Loại hàng</h3>
                    <div class="modal-body">
                        <?php   $i=1;   
                        foreach ($tag_prod as $row1):?>
                            <form action="" method="post">
                                <div class="input-group  flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3"  id="addon-wrapping">Loại hàng <?php echo $i;?></span>
                                    <select name="TagID" id="<?php echo $row1['TagID']; ?>" class="form-control">
                                        <option value=null disabled selected>-- Chọn loại hàng --</option>
                                        <?php foreach ($tag as $row): ?>
                                            <option <?php echo $row['TagID']==$row1['TagID'] ? 'selected' : ''; ?> value="<?php echo $row['TagID']; ?>"><?php echo $row['TagName']; ?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <input name="old_tagID" type="hidden" value="<?php echo $row1['TagID']; ?>">
                                    <button name="modify_tag_prod" type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        <?php   $i++;   
                        endforeach; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#add">Thêm</button>
                    </div>
                    
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
                                            <span class="input-group-text col-md-3"  id="addon-wrapping">Loại hàng</span>
                                            <select name="TagID" id="<?php echo $row1['TagID']; ?>" class="form-control">
                                                <option value=null disabled selected>-- Chọn loại hàng --</option>
                                                <?php foreach ($tag as $row): ?>
                                                    <option value="<?php echo $row['TagID']; ?>"><?php echo $row['TagName']; ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                        <button name="add_tag_prod" type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php 
view('layout.footer-admin');
?>