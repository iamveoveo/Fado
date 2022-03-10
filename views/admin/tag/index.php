<?php 
view('layout.header-admin');
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
                                <th>Tên loại</th>
                                <th>Dòng hàng</th>
                                <th>Xu hướng</th>
                                <th>Sửa </th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($tags as $row): ?>
                                <tr>
                                    <td><?php echo $row['TagID']; ?></td>
                                    <td><?php echo $row['TagName']; ?></td>
                                    <td><?php echo $row['BigTagName']; ?></td>
                                    <td><?php echo $row['TagTrending']==1 ? '<i class="fa-solid fa-square-check text-success"></i>' : '<i class="fa-solid fa-square-xmark"></i>'; ?></td>
                                    <td>
                                        <button href="<?php echo SITEURL?>" type="button" class="btn btn-outline-success btn-sm "style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </td>
                                    <td>
                                    <button type="button" class="btn btn-outline-dark btn-sm" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#detele">
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
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm loại hàng</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- body -->
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="input-group  flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3"  id="addon-wrapping">Mã loại hàng</span>
                                        <input name="TagID" type="text" class="form-control" placeholder="Mã loại hàng" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Tên loại hàng</span>
                                        <input name="TagName" type="text" class="form-control" placeholder="Tên loại hàng" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Miêu tả</span>
                                        <textarea name="TagDes"  type="text" class="form-control"></textarea>
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Thuộc loại</span>
                                        <select name="BigTag" class="form-control">
                                            <option value=null selected> --Chọn loại--</option>
                                            <?php foreach ($bigTag as $row): ?>
                                                <option value="<?php echo $row['TagID']; ?>"><?php echo $row['TagName']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="input-group flex-nowrap mb-2 ">
                                        <span class="input-group-text col-md-3" id="addon-wrapping">Xu hướng</span>
                                        <input name="TagTrending" class="form-check-input mt-0" style="height: 38px;width: 38px;margin: auto;border: solid 1px #000000;" type="checkbox" value="1" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <button name="add_tag" type="submit" class="btn btn-primary">Lưu</button>
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
                                <button type="button" class="btn btn-primary mx-3  ">Xóa</button>                                       
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