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
                            <div style="max-width:60%;margin:auto;">
                                <div class="input-group  flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3"  id="addon-wrapping">Mã loại hàng</span>
                                    <input readonly value="<?php echo $tag[0]['TagID']?>" name="TagID" type="text" class="form-control" placeholder="Mã loại hàng" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Tên loại hàng</span>
                                    <input value="<?php echo $tag[0]['TagName']?>" name="TagName" type="text" class="form-control" placeholder="Tên loại hàng" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Miêu tả</span>
                                    <textarea name="TagDes" class="form-control"><?php echo $tag[0]['TagDes']?></textarea>
                                </div>
                                <div class="input-group flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Thuộc loại</span>
                                    <select name="BigTag" class="form-control">
                                        <option value=null> --Chọn loại--</option>
                                        <?php foreach ($bigTag as $row): ?>
                                            <option <?php echo $tag[0]['BigTag']==$row['TagID'] ? 'selected' : ''?> value="<?php echo $row['TagID']; ?>"><?php echo $row['TagName']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-group flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Xu hướng</span>
                                    
                                    <input <?php echo $tag[0]['TagTrending']==1 ? 'checked' : ''?> name="TagTrending" class="form-radio-input mt-0" style="height: 38px;width: 38px;margin: auto;" type="radio" value="1" aria-label="radio for following text input">
                                    <span class="input-group-text" id="addon-wrapping">có</span>
                                    
                                    <input <?php echo $tag[0]['TagTrending']!=1 ? 'checked' : ''?> name="TagTrending" class="form-radio-input mt-0" style="height: 38px;width: 38px;margin: auto;" type="radio" value="0" aria-label="radio for following text input">
                                    <span class="input-group-text" id="addon-wrapping">không</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo SITEURL . '?controller=tag' ?>">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Trở lại</button>
                            </a>
                            <button name="modify_tag" type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>

<?php 
view('layout.footer-admin');
?>