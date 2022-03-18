<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin | Fado</title>
        <link rel="icon" href="assets/img/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="assets/css/styles-admin.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 logo-nav"  href="index.php">
                <img src="https://stfe.fadoglobal.io/desktop/image/logo/fado_black_v1.svg" alt="">
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm kiếm..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Cài đặt</a></li>
                        <li><a class="dropdown-item" href="#!">Hỗ trợ</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- sidebar -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link nav-hov" href="<?php echo SITEURL . '?controller=admin'; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Bảng điều khiển
                            </a>

                            <!-- quản lý -->
                            <div class="sb-sidenav-menu-heading">Quản lý</div>
                            <!-- sản phẩm -->
                            <a class="nav-link nav-hov collapsed" href="<?php echo SITEURL . '?controller=product'; ?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sản phẩm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo SITEURL . '?controller=product'; ?>">Sản phẩm</a>
                                    <a class="nav-link" href="<?php echo SITEURL . '?controller=tag'; ?>">Loại hàng</a>
                                    <a class="nav-link" href="<?php echo SITEURL . '?controller=voucher'; ?>">Mã giảm giá</a>
                                    <a class="nav-link" href="<?php echo SITEURL . '?controller=manufacture'; ?>">Nhà sản xuất</a>
                                </nav>
                            </div>
                            <a class="nav-link nav-hov" href="<?php echo SITEURL . '?controller=users'; ?>" >
                                <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                                Người dùng
                            </a>

                            <!-- đơn hàng -->
                            <a class="nav-link nav-hov collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="bi bi-list-ol"></i></div>
                                Đơn hàng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="<?php echo SITEURL . '?controller=order'; ?>" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Đơn hàng
                                    </a>
                                    <a class="nav-link collapsed" href="<?php echo SITEURL . '?controller=payment'; ?>" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Hình thức thanh toán
                                    </a>
                                    
                                    <a class="nav-link collapsed" href="<?php echo SITEURL . '?controller=delivery'; ?>" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Đơn vị vận chuyển
                                    </a>
                                    
                                </nav>
                            </div>

                            <!-- account -->
                            <a class="nav-link collapsed nav-hov" href="profile.php" >
                                <div class="sb-nav-link-icon"><i class="bi bi-person-circle"></i></div>
                                Tài khoản
                            </a>

                            <div class="sb-sidenav-menu-heading">Bảng</div>
                            <a class="nav-link nav-hov" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Bảng xếp hạng
                            </a>
                            <a class="nav-link nav-hov" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                
                </nav>
            </div>