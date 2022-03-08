<?php
view('layout.head');
?>

    <div class="wrapper">
    <?php
        view('layout.header');
    ?>

    <!-- notranslate -->
    <section  class="notranslate d-flex">
        <div class="container">
            <ul class="mt-3">
                <li class="icon-home after-sloid">
                     <a href="<?php echo SITEURL?>">
                        <i class="fa-solid fa-house-chimney"></i>
                     </a>
                </li>
                <?php foreach ($getTagOfProd as $row): ?>
                    <li class=" px-3 after-sloid icon-home">
                        <a class="cl-detail" href="#"><?php echo $row['TagName'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
           
        </div>
    </section>

    <!--product scroll  -->
    <section id="product-scroll-section" class="product-scroll-section headroom headroom--not-top ">
        <div class="container">
            <div class="product-scroll-section__inner">
                <!-- price -->
                <div class="product-scroll-1 d-flex">
                    <div class="price-type-segment">Nhập khẩu tiêu dùng</div>
                    <div class="price-segment">
                        <div class="price-segment__curr-price-panel">
                            <span class="curr-price">
                                3,0170,000<sup>đ</sup>
                            </span>
                        </div>
                        <div class="price-segment__old-price-panel">
                            <span class="old-price">3,509,00 <sup>đ</sup></span>
                            <span class="mx-2">|</span>
                            <span><b>14% OFF</b></span>
                        </div>
                    </div>
                </div>
                <!-- cart -->
                <div class="product-scroll-2">
                    <div class="cart-segment d-flex mt-4">
                        <div class="quantity-control-group">
                            <div class="down-btn down-btn-head " disabled>-</div>
                            <input type="text" class="quantity-input mx-1 text-light" value="1" readonly>
                            <div class="up-btn down-btn-head">+</div>
                        </div>
                        <div class="btn btn-light cart-shared mx-3 cart-online">MUA NGAY</div>
                        <div class="btn btn-light cart-shared mx-1 cart-this">
                            <i class="fa-solid fa-cart-shopping"></i>
                           <b>Giỏ hàng   </b>           
                        </div>
                        <div class="control-group">
                            <button title="Thêm vào giỏ hàng" class="btn add-cart">
                                <i class="bi bi-cart-plus"></i>                                                
                            </button>
                            <button title="Thêm vào yêu thích" class="btn favorite-btn">
                                <i class="fa-solid fa-code-compare"></i>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>        
    </section>
    
    <!-- main detail -->
    <section class="main-detail-section ">
        <div class="container d-flex">
            <div class="col-md-10 d-flex">
                <div class="col-md-6 img-fluid col-cor">
                    <div class="image-slider">
                        <div class="swiper-slide">
                            <div class="swiper-wrapper">
                                <a href="#">
                                    <img src="assets/img/upload/<?php echo $prod[0]['ProdImg'];?>" alt="<?php echo $prod[0]['ProdImg'];?>">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
    
                <!-- details content -->
                <div class="col-md-6 product-detail ">
                    <div class="product-name-segment mb-2">
                        <h1 class="product-name"><?php echo $prod[0]['ProdName'];?></h1>
                    </div>
                    <div class="brand-segment d-flex mb-1">
                        <div class="name-outer">
                            <span class="text-dark">Thương hiệu: </span><?php echo $prod[0]['ManuName'];?>
                        </div>
                        <div class="name-outer">
                            <span class="text-dark">Bán tại: </span><?php echo $prod[0]['ManuCountry'];?>
                        </div>
                        <div class="">
                            <span class="text-dark">Tình trạng: </span><?php echo $prod[0]['ProdStatus'];?>
                        </div>
                    </div>
                    <!-- rating -->
                    <div class="rating-segment">
                        <div class="rating-number d-flex">
                            <b>5.0</b>
                            <div class="rating-group d-flex mx-2">
                                <div class="rating-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="review">(1120 đánh giá)</div>
                        </div>
                        <div class="change-price-tab"></div>
    
                        <?php if (!isset($_SESSION['logged'])): ?>
                            <a href="<?php echo SITEURL . '?action=login'; ?>" class="d-flex alert-login-segment">
                                <div class="alert-login-icon">
                                    <img src="	https://stfe.fadoglobal.io/desktop/image/svg/icon-discount-bag-v2.svg" alt="icon-discount-bag-v2">
                                </div>
                                <div class="alert-login-text">
                                    Đăng nhập hoặc đăng ký để mua hàng và nhận thêm nhiều ưu đãi hấp dẫn dành riêng cho thành viên Fado
                                </div>
                                <div class="alert-login-right-icon">
                                    <i class="fa-solid fa-angle-right"></i>                        
                                </div>
                            </a>
                        <?php endif; ?>
                        <!-- benifit box -->
                        <div class="benefit-box">
                            <div class="benefit-segment">
                                <a href="#" class="benefit-row hover-effect">
                                    Nhận ưu đãi <span class="fw-bold">lên đến 6%</span> khi tham gia <span>Fado VIPClub</span>
                                </a>
                                <a href="#" class="benefit-row hover-effect">
                                    <span class="fw-bold">Giảm 1% </span>trên đơn hàng (tối đa 200,000đ) khi thanh toán bằng<span class="fw-bold"> FadoPay</span>
                                </a>
                                <a href="#" class="benefit-row hover-effect">
                                    Đổi trả sản phầm 24 giờ<span> Chi tiết</span>
                                </a>
                                <div class="benefit-row">Sản phẩm có sẵn tại Việt Nam</div>
                                <div class="benefit-bod"></div>
                            </div>
    
                            <div class="benefit-segment notranslate d-flex " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="benefit-discount">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Mã giảm giá</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <!-- modal body -->
                                                <div class="modal-body">
                                                    <div class="discount-modal-list">
                                                        <div class="discount-item d-flex">
                                                            <div class="discount-item-content">
                                                                <!-- modal content head -->
                                                                <div class="discount-item-head">
                                                                    <div class="discount-item-avatar">
                                                                        <img src="	https://static.fado.vn/f/desktop/v2/images-temp/icon-discount/2.svg" alt="">
                                                                    </div>
                                                                </div>
                                                                <!--  modal content body -->
                                                                <div class="discount-item-body">
                                                                    <div class="discount-item-row d-flex">
                                                                        <div class="discount-item-title">Giảm 50,000đ</div>
                                                                        <div class="discount-item-tootip"><i class="fa-solid fa-circle-exclamation"></i></div>
                                                                    </div>
                                                                    <div class="discount-item-row middle">Cho đơn hàng từ 499K</div>
                                                                    <div class="discount-item-row bottom">
                                                                        <div class="discount-item-time">HSD: 07-03-2022</div>
                                                                        <div class="discount-item-control">
                                                                            <button class="btn btn-dark">Lưu</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="discount-item-background">
                                                                <img src="https://stfe.fadoglobal.io/desktop/image/svg/discount-bg-type-1.svg" alt="">
                                                            </div>
                                                        </div>
    
                                                        <div class="discount-item d-flex">
                                                            <div class="discount-item-content">
                                                                <!-- modal content head -->
                                                                <div class="discount-item-head">
                                                                    <div class="discount-item-avatar">
                                                                        <img src="	https://static.fado.vn/f/desktop/v2/images-temp/icon-discount/2.svg" alt="">
                                                                    </div>
                                                                </div>
                                                                <!--  modal content body -->
                                                                <div class="discount-item-body">
                                                                    <div class="discount-item-row d-flex">
                                                                        <div class="discount-item-title">Giảm 100,000đ</div>
                                                                        <div class="discount-item-tootip"><i class="fa-solid fa-circle-exclamation"></i></div>
                                                                    </div>
                                                                    <div class="discount-item-row middle">Cho đơn hàng từ 999K</div>
                                                                    <div class="discount-item-row bottom">
                                                                        <div class="discount-item-time">HSD: 07-03-2022</div>
                                                                        <div class="discount-item-control">
                                                                            <button class="btn btn-dark">Lưu</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="discount-item-background">
                                                                <img src="https://stfe.fadoglobal.io/desktop/image/svg/discount-bg-type-1.svg" alt="">
                                                            </div>
                                                        </div>
    
                                                        <div class="discount-item d-flex">
                                                            <div class="discount-item-content">
                                                                <!-- modal content head -->
                                                                <div class="discount-item-head">
                                                                    <div class="discount-item-avatar">
                                                                        <img src="	https://static.fado.vn/f/desktop/v2/images-temp/icon-discount/2.svg" alt="">
                                                                    </div>
                                                                </div>
                                                                <!--  modal content body -->
                                                                <div class="discount-item-body">
                                                                    <div class="discount-item-row d-flex">
                                                                        <div class="discount-item-title">Giảm 250,000đ</div>
                                                                        <div class="discount-item-tootip"><i class="fa-solid fa-circle-exclamation"></i></div>
                                                                    </div>
                                                                    <div class="discount-item-row middle">Cho đơn hàng từ 2M</div>
                                                                    <div class="discount-item-row bottom">
                                                                        <div class="discount-item-time">HSD: 07-03-2022</div>
                                                                        <div class="discount-item-control">
                                                                            <button class="btn btn-dark">Lưu</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="discount-item-background">
                                                                <img src="https://stfe.fadoglobal.io/desktop/image/svg/discount-bg-type-1.svg" alt="">
                                                            </div>
                                                        </div>
    
                                                    </div>
                                                </div>
                                                <div class="modal-footer"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- dicount -->
                                <div class="benefit-discount-list d-flex">
                                    <div class="benefit-discount-item">
                                        <div class="benefit-discount-item-text">
                                            Giảm 50,000đ
                                        </div>
                                    </div>
                                    <div class="benefit-discount-item">
                                        <div class="benefit-discount-item-text">
                                            Giảm 100,000đ
                                        </div>
                                    </div>
                                    <div class="benefit-discount-item">
                                        <div class="benefit-discount-item-text">
                                            Giảm 250,000đ
                                        </div>
                                    </div>
                                </div>
                                <!-- icon discount-->
                                <div class=" benefit-discount-more">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
    
                        <!-- new price  -->
                        <?php if ($prod[0]['Discount']!=0): ?>
                            <div class="price-segment mt-4">
                                <div class="current-price-inner">
                                    <span class="current-price"><?php echo number_format($prod[0]['ProdPrice']*(1-$prod[0]['Discount']));?>
                                        <sup>đ</sup>
                                    </span>
                                    <span class="infomation"><i class="fas fa-info-circle mz-align-middle"></i></span>
                                    <button class="btn btn-outline-dark hurt">
                                        <i class="fa-solid fa-check"></i>Săn giá rẻ
                                    </button>
                                </div>
                            </div>
    
                            <!-- old price -->
                            <div class="old-price-panel">
                                <span class="old-price old-price-detail">
                                    <?php echo number_format($prod[0]['ProdPrice']);?>
                                    <sup>đ</sup>
                                </span>
                                <span class="mx-2">|</span>
                                <span><b>GIẢM <?php echo $prod[0]['Discount'];?>%</b></span>
                                <span class="save mx-1">(Tiết kiệm: <?php echo number_format($prod[0]['ProdPrice']*$prod[0]['Discount']);?> <sup>đ</sup>)</span>
                            </div>
                        <?php else: ?>
                            <div class="price-segment mt-4">
                                <div class="current-price-inner">
                                    <span class="current-price"><?php echo number_format($prod[0]['ProdPrice']*(1-$prod[0]['Discount']));?>
                                        <sup>đ</sup>
                                    </span>
                                    <span class="infomation"><i class="fas fa-info-circle mz-align-middle"></i></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- cart -->
                        <div class="cart-segment d-flex mt-3">
                            <div class="quantity-control-group">
                                <div class="down-btn ">-</div>
                                <input type="text" class="quantity-input mx-1" value="1" readonly>
                                <div class="up-btn">+</div>
                            </div>
                            <div class="btn btn-dark cart-shared mx-3 cart-online">MUA NGAY</div>
                            <div class="btn btn-outline-dark cart-shared mx-1 cart-this">
                                <i class="fa-solid fa-cart-shopping"></i>
                               <b>Giỏ hàng   </b>           
                            </div>
                        </div>
    
                        <!-- provider -->
                        <div class="provider-segment detail-info-segment mt-3">
                            <div>Miễn phí Vận chuyển Siêu tốc cho Platinum và Super VIP.
                                <a href="#"><b>Nâng cấp ngay</b></a>
                            </div>
                            <div class="provider-segment-inner">
                                <div class="segment-head">
                                    <div class="pd-segment-head">
                                        <b>Giao Tiêu chuẩn</b>
                                    </div>
                                </div>
                                <div class="current-provider-info text-center">
                                    Dự kiến về Việt Nam
                                    <b class="mx-1">11-03-2022 - 16-03-2022</b>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>

        </div>
        
    </section>

    <?php
        view('home.feature');
    ?>

    <!-- product info -->
    <section class="product-info-section mt-5">
        <div class="container d-flex">
            <div class="col-md-10">
                <div class="define-amazon-content">
                    <br>
                    <span>
                        <strong><?php echo $prod[0]['ProdName'];?></strong>
                        <img src="assets/img/upload/<?php echo $prod[0]['ProdImg'];?>" alt="<?php echo $prod[0]['ProdImg'];?>">
                    </span>
                </div>
                <div class="define-amazon-detail mt-5 mb-3 fs-5 text">
                    <span>
                        <strong>Thông số kỹ thuật</strong>
                    </span>
                </div>
                <!-- table -->
                <table>
                    <tr>
                        <th>Thương hiệu</th>
                        <td><?php echo $prod[0]['ManuName'];?></td>
                    </tr>
                    <tr>
                        <th>Series</th>
                        <td><?php echo $prod[0]['Series'];?></td>
                    </tr>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <td><?php echo $prod[0]['ProdID'];?></td>
                    </tr>
                    <tr>
                        <th>Số lượng còn lại</th>
                        <td><?php echo $prod[0]['ProdInStock'];?></td>
                    </tr>
                    <tr>
                        <th>Cân nặng</th>
                        <td><?php echo $prod[0]['Weight'];?></td>
                    </tr>
                    <tr>
                        <th>Chát liệu</th>
                        <td><?php echo $prod[0]['Material'];?></td>
                    </tr>
                    <tr>
                        <th>Màu</th>
                        <td><?php echo $prod[0]['Color'];?></td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td><?php echo $prod[0]['Dimension'];?></td>
                    </tr>
                    <tr>
                        <th>ASIN</th>
                        <td><?php echo $prod[0]['ASIN'];?></td>
                    </tr>
                    <tr>
                        <th>UPC</th>
                        <td><?php echo $prod[0]['UPC'];?></td>
                    </tr>
                </table>
            </div>
               
            <!-- side-sticky-wrapper -->
            <div class="col-md-2">
                <div class="side-sticky-wrapper ">
                    <div  id="our-feature-side-section" class="mz-basic-sidebox has-box our-feature-side-section headroom headroom--not-bottom headroom--not-top">
                        <div class="feature-list dropdown">
                            <div class="feature-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="feature-item-inner">
                                    <div class="feature-item-icon d-flex">
                                        <i class="fas fa-hand-holding-usd"></i>
                                        <div class="feature-item-content mx-2"> Giá bạn thấy bằng giá<br> bạn trả</div>
                                        <div class="feature-item-dropdown-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item feature-item-des" href="#">Cam kết giá bán niêm yết chính xác trên website</a></li>
                            </ul>

                            <div class="feature-item dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="feature-item-inner">
                                    <div class="feature-item-icon d-flex">
                                        <i class="fas fa-user-shield"></i>
                                        <div class="feature-item-content mx-2"> Hàng chất lượng, rõ nguồn <br> gốc</div>
                                        <div class="feature-item-dropdown-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item feature-item-des" href="#">Chất lượng đảm bảo, nguồn gốc rõ ràng,<br> có đánh giá từ người mua và thẩm định độ uy tín người bán</a></li>
                            </ul>

                            <div class="feature-item dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="feature-item-inner">
                                    <div class="feature-item-icon d-flex">
                                        <i class="fa-solid fa-check-to-slot"></i>
                                        <div class="feature-item-content mx-2"> Yên tâm mua sắm giải,<br> tỏa rủi ro</div>
                                        <div class="feature-item-dropdown-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <li><a class="dropdown-item feature-item-des" href="#">Bảo vệ quyền lợi Khách Hàng,<br> hỗ trợ đổi trả nhanh chóng  </a></li>
                            </ul>

                            <div class="feature-item dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="feature-item-inner">
                                    <div class="feature-item-icon d-flex">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <div class="feature-item-content mx-2">Sản phẩm nhập khẩu chính <br> ngạch</div>
                                        <div class="feature-item-dropdown-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <li><a class="dropdown-item feature-item-des" href="#">An toàn, minh bạch hợp pháp, không sợ rủi ro</a></li>
                            </ul>

                            <div class="feature-item dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="feature-item-inner">
                                    <div class="feature-item-icon d-flex">
                                        <i class="fa-solid fa-earth-asia"></i>
                                        <div class="feature-item-content mx-2">Liên tục cập nhật hành trình</div>
                                        <div class="feature-item-dropdown-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <li><a class="dropdown-item feature-item-des" href="#">Theo dõi và cập nhật quá trình vận đơn thường xuyên</a></li>
                            </ul>
                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- image product -->
    <section class="product-image-section mt-4">
        <div class="container">
            <div class="product-image-title">
                Hình ảnh chi tiết
            </div>
            <div class="product-image-body">
                <img src="assets/img/upload/casi-sheen.jpg" alt="">
            </div>
        </div>

    </section>
<?php
    view('layout.footer');
?>