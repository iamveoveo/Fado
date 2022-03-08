<?php
view('layout.head');
?>

<body class="auth-page">
    <section class="auth-block">
        <div class="auth-block-container">
            <div class="auth-block-space"></div>
            <div class="auth-block-form">
                <ul class="auth-block-logo">
                    <a href="#" class="auth-header-block-logo">
                        <img class="block-logo-img" src="https://stfe.fadoglobal.io/desktop/image/logo/fado_black_v1.svg" alt="">
                    </a>
                </ul>

                <!-- list -->
                <ul class="auth-block-menu-list nav nav-tabs" id="myTab" role="tablist">
                    <li>
                        <button class="login-active nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Đăng nhập</button>
                    </li>
                    <li>
                        <button class="register-active nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Đăng ký</button>
                    </li>
                </ul>

                <?php
                    view('layout.alert');
                ?>

                <!-- body -->
                <div class="auth-block-form-body tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="<?php echo SITEURL . "?action=login"; ?>" method="post" class="auth-block-form">
                            <div class="form-group">
                                <div class="form-group-lable">Email</div>
                                <div class="form-group-control">
                                    <div class="mz-form-control-md">
                                        <input name="UserEmail" type="email" class="my-form-control" placeholder="Địa chỉ email của quý khách">
                                        <input type="text" hidden readonly>
                                        <input type="text" hidden readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-lable">Password</div>
                                <div class="form-group-control">
                                    <div class="mz-form-control-md">
                                        <input name="Password" type="password" class="my-form-control" placeholder="Mật khẩu của quý khách">
                                    </div>
                                </div>
                            </div>

                            <!-- Forgot password -->
                            <div class="Forgot-password text-right">
                                <a href="#">Quên mật khẩu ?</a>
                            </div>

                            <!-- btn -->
                            <div class="auth-block-bnt-group mt-5 text-center">
                                <button name="login" type="submit" class="auth-block-login-btn btn btn-dark">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form action="<?php echo SITEURL . "?action=login"; ?>" method="post" class="auth-block-form">
                            <div class="form-group">
                                <div class="form-group-lable fw-bold">Họ và tên</div>
                                <div class="form-group-control">
                                    <div class="mz-form-control-md">
                                        <input name="name" type="text" class="my-form-control" placeholder="Vui lòng nhập Họ và tên chính xác">
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-lable fw-bold">Địa chỉ email</div>
                                <div class="form-group-control">
                                    <div class="mz-form-control-md">
                                        <input name="UserEmail" type="email" class="my-form-control" placeholder="Địa chỉ email của quý khách">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group-lable fw-bold">Địa chỉ</div>
                                <div class="form-group-control">
                                    <div class="mz-form-control-md">
                                        <input name="Address" type="text" class="my-form-control" placeholder="Địa chỉ của quý khách">
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex">
                                <div class="form-group col-md-6">
                                    <div class="form-group-lable fw-bold">Giới tính</div>
                                    <div class="form-group-control">
                                        <div class="mz-form-control-md">
                                            <select name="Gender" class="my-form-control" placeholder="--Giới tính--">
                                                <option value=null disabled selected>- - Giới tính - -</option>
                                                <option value="Nữ">Nữ</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group-lable fw-bold">Ngày sinh</div>
                                    <div class="form-group-control">
                                        <div class="mz-form-control-md">
                                            <input name="Birth" type="date" class="my-form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group-lable fw-bold">Số điện thoại</div>
                                <div class="form-group-control">
                                    <div class="mz-form-control-md">
                                        <input Name="Tel" type="tel" class="my-form-control" placeholder="Vui lòng nhập số điện thoại chính xác">
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex">
                                <div class="form-group col-md-6">
                                    <div class="form-group-lable fw-bold">Mật khẩu</div>
                                    <div class="form-group-control">
                                        <div class="mz-form-control-md">
                                            <input name="Password1" type="password" class="my-form-control" placeholder="Mật khẩu của quý khách">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group-lable fw-bold">Xác nhận mật khẩu</div>
                                    <div class="form-group-control">
                                        <div class="mz-form-control-md">
                                            <input name="Password2" type="password" class="my-form-control" placeholder="Nhập lại mật khẩu">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- btn -->
                            <div class="auth-block-bnt-group mt-2 text-center">
                                <button name="register" type="submit" class="auth-block-login-btn btn btn-dark">Đăng ký</button>
                            </div>
                        </form>
                    </div>

                    <!-- login segment -->
                    <div class="auth-block-login-segment">
                        <div class="login-segment-title text-center">
                            <span class="login-segment-title-inner">Hoặc đăng nhập qua</span>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-6">
                                <a href="#" class="auth-social-btn">
                                    <i class="fab fa-facebook-square"></i>
                                    Facebook
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="auth-social-btn">
                                    <i class="fab fa-google-plus-square"></i>
                                    Google Plus
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- space -->
            <div class="auth-block-space"></div>
        </div>
    </section>

<script src="assets/css/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>