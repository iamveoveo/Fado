<?php
view('layout.head');
view('layout.header');
view('home.slide');
view('department.depart_list', ["manufacture" => $manufacture]);
echo "<pre>";
echo print_r($prodByVou);
echo "</pre>";
view('home.deal', ['prodByVou'  => $prodByVou]);
?>

    <!-- home trending -->
    <section class="home-trending-section">
        <div class="container">
            <div class="home-trending-block">
                <div class="block-head">
                    <div class="head-title-col">
                        <div class="head-title">
                            <span>Xu hướng mua sắm phổ biến</span>
                        </div>
                    </div>

                    <!-- tab item -->
                    <div class="tab-item-col">
                        <ul class="nav nav-tabs nav-tab-style mb-3" id="myTab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <button class="nav-link tab-style-item active" id="beautify-tab" data-bs-toggle="tab" data-bs-target="#beautify" type="button" role="tab" aria-controls="profile" aria-selected="false">Làm đẹp</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-style-item" id="kitchen-tools-tab" data-bs-toggle="tab" data-bs-target="#kitchen-tools" type="button" role="tab" aria-controls="profile" aria-selected="false">Dụng cụ bếp</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link tab-style-item " id="watch" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Sneaker MLB</button>
                            </li>
                            
                            <li class="nav-item" role="presentation">
                            <button class="nav-link tab-style-item" id="toaster" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Máy nướng bánh</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link tab-style-item" id="coffee-maker" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Máy pha cà phê</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-style-item" id="vitamin-supplement" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Bổ sung vitamin</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-style-item" id="medical-equipment" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Thiết bị y tế</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-style-item" id="fado-vip" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Fado vip club & e-gift card</button>
                            </li>
                              
                        </ul>
                    </div>
                </div>    
                <div class="block-body">
                    <div class="tab-content" id="myTabContent">
                        <!-- beauty -->
                        <div class="tab-pane fade show active" id="beautify" role="tabpanel" aria-labelledby="beautify-tab">
                            <div class="row mb-2">
                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid" src="assets/img/trending/son-tom.jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-40%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Son Tom Ford Lip Color Matte Lipstick # 07 Ruby Rush
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(1,45 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Đức</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="price-group-treding col-md-6">
                                                <!-- price -->
                                                <span class="current-price">1,524,000<sup>đ</sup></span>
                                                <br>
                                                <span class="old-price">2,540,000<sup>đ</sup></span>
                                            </div>
    
                                            <!-- control -->
                                            <div class="control-group-trending col-md-6">
                                                <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                    <i class="bi bi-cart-plus"></i>                                                
                                                </button>
                                                <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                    <i class="far fa-heart mt-1"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid" src="assets/img/trending/son-YSL.jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Son Ysl Rouge Volupte Shine <br> # 14
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row trend-report">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(9,45 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Mỹ</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="info-row">
                                                <a href="" class="report-product">
                                                    <font style="vertical-align: inherit; color: #5a5951;">Đang cập nhật</font>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid" src="assets/img/trending/son-gucci.jpg" alt="">
                                            </div>
  
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    SON GUCCI LIPSTICK SAILING # 302 AGATHA ORANGE
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row trend-report">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(4,68 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Mỹ</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="price-group-treding col-md-6 mt-2">
                                                <!-- price -->
                                                <span class="current-price">1,079,000<sup>đ</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid" src="assets/img/trending/son-Hermes.jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Son Hermes Rouge Hermes Matte Lipstick (Limited Edition) # 54 Rose Nuit                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row trend-report">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(7,82 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Mỹ</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="info-row">
                                                <a href="" class="report-product">
                                                    <font style="vertical-align: inherit; color: #5a5951;">Đang cập nhật</font>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid" src="assets/img/trending/son-Dior.jpg" alt="">
                                            </div>
  
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    SON DIOR # 999 ULTRA DIOR / RED DIOR ULTRA RED
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(3,51 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Mỹ</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="price-group-treding col-md-6">
                                                <!-- price -->
                                                <span class="current-price">1,127,000<sup>đ</sup></span>
                                               
                                            </div>
    
                                            <!-- control -->
                                            <div class="control-group-trending col-md-6">
                                                <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                    <i class="bi bi-cart-plus"></i>                                                
                                                </button>
                                                <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                    <i class="far fa-heart mt-1"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=" mb-3 d-flex">
                                <div class="col-md-4  mt-2 border border-dark">
                                    <div class="trend-mg d-flex">
                                        <a href="" class="product-horizontal-img col-4">
                                            <div class="product-img-outer col-4">
                                                <img class="img-fluid" src="assets/img/trending/nuoc-hoa-Burberry.jpg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-40%</font>
                                            </div>
                                        </a>
                                        <div class="product-horizontal-load col-8">
                                            <div class="card-title">
                                                <a href="" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        Nước hoa nam BURBERRY LONDON <br> EDT 100ML
                                                    </font>
                                                </a>
                                            </div>
                                            <div class="meta-row">
                                                <div class="rating-col">
                                                    <div class="rating-group d-flex">
                                                        <div class="rating-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>                                                        </div>
                                                        <div class="lable-field">
                                                            <span class="rating-label number-fiel">
                                                                <font style="vertical-align: inherit;">(432)</font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">･ </font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">Mỹ</font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">2,133,000<sup>đ</sup></span>
                                                    <span class="old-price">3,555,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-4 mx-2 mt-2 border border-dark">
                                    <div class="trend-mg d-flex">
                                        <a href="" class="product-horizontal-img col-4">
                                            <div class="product-img-outer col-4">
                                                <img class="img-fluid" src="assets/img/trending/nuoc-hao-Tamdao.jpg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-19%</font>
                                            </div>
                                        </a>
                                        <div class="product-horizontal-load col-8">
                                            <div class="card-title">
                                                <a href="" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        TAMDAO 75ML EDF
                                                    </font>
                                                </a>
                                            </div>
                                            <div class="meta-row">
                                                <div class="rating-col">
                                                    <div class="rating-group d-flex">
                                                        <div class="rating-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>                                                        </div>
                                                        <div class="lable-field">
                                                            <span class="rating-label number-fiel">
                                                                <font style="vertical-align: inherit;">(1,73 nghìn)</font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">･ </font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">Mỹ</font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">4,603,000<sup>đ</sup></span>
                                                    <span class="old-price">5,016,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-4 mx-2 mt-2 border border-dark">
                                    <div class="trend-mg d-flex">
                                        <a href="" class="product-horizontal-img col-4">
                                            <div class="product-img-outer col-4">
                                                <img class="img-fluid" src="assets/img/trending/nuoc-hoa-Yves.jpg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-19%</font>
                                            </div>
                                        </a>
                                        <div class="product-horizontal-load col-8">
                                            <div class="card-title">
                                                <a href="" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        Yves Saint Laurent La Nud Romme Eau De Toilette 100ml                                                    </font>
                                                </a>
                                            </div>
                                            <div class="meta-row">
                                                <div class="rating-col">
                                                    <div class="rating-group d-flex">
                                                        <div class="rating-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                                                                                   
                                                        </div>
                                                        <div class="lable-field">
                                                            <span class="rating-label number-fiel">
                                                                <font style="vertical-align: inherit;">(1,53 nghìn)</font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">･ </font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">Mỹ</font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">2,385,000<sup>đ</sup></span>
                                                    <span class="old-price">2,944,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="text-center">
                                <button class="btn btn-outline-dark buy-now">Xem thêm</button>
                            </div>
                        </div>

                        <!-- kitchen-tools -->
                        <div class="tab-pane fade " id="kitchen-tools" role="tabpanel" aria-labelledby="kitchen-tools-tab">
                            <div class="row mb-2">
                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-img-trend" src="assets/img/trending/noi-dien-kuchenzimmer1.jpeg" alt="">
                                            </div>
                                           
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Nồi điện Kuchenzinmmer 1.0 lít
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(6,51 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Việt Nam</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="price-group-treding col-md-6">
                                                <!-- price -->
                                                <span class="current-price">1,104,000<sup>đ</sup></span>
                                            </div>
    
                                            <!-- control -->
                                            <div class="control-group-trending col-md-6">
                                                <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                    <i class="bi bi-cart-plus"></i>                                                
                                                </button>
                                                <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                    <i class="far fa-heart mt-1"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-img-trend" src="assets/img/trending/am-Carl.jpeg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-52%</font>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Ấm đun nước CARL SCHMIDT <br> SOHN màu kem - 058487
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row trend-report">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(6,46 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Việt Nam</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">2,280,000<sup>đ</sup></span>
                                                    <span class="old-price">4,750,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-img-trend" src="assets/img/trending/may-xay-Kuchen.jpeg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-52%</font>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Máy xay thịt Kuchenzimmer 3000327 - đen
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row trend-report">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(4,64 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Việt Nam</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">1,757,000<sup>đ</sup></span>
                                                    <span class="old-price">3,660,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img style-img-trend">
                                                <img class="img-fluid" src="assets/img/trending/dao-bep-7pcs.jpeg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-52%</font>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Bộ dao bếp 7pcs Home Kitchen kèm mài dao
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row trend-report">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(1,23 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Việt Nam</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">527,000<sup>đ</sup></span>
                                                    <span class="old-price">1,096,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid border border-dark">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img style-img-trend">
                                                <img class="img-fluid" src="assets/img/trending/may-xay-Hamilton.jpeg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-52%</font>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Máy xay sinh tí cầm tay Hamilton Beach 51241-SAU
                                                </font>
                                            </a>
                                        </div>
                                        
                                        <div class="meta-row">
                                            <div class="rating-col">
                                                <div class="rating-group d-flex">
                                                    <div class="rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="lable-field">
                                                        <span class="rating-label number-fiel">
                                                            <font style="vertical-align: inherit;">(4,73 nghìn)</font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">･ </font>
                                                        </span>
                                                        <span class="rating-label">
                                                            <font style="vertical-align: inherit;">Việt Nam</font>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="price-group-treding col-md-6">
                                                <!-- price -->
                                                <span class="current-price">1,668,000<sup>đ</sup></span>
                                                <span class="old-price">3,474,000<sup>đ</sup></span>
                                            </div>
    
                                            <!-- control -->
                                            <div class="control-group-trending col-md-6">
                                                <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                    <i class="bi bi-cart-plus"></i>                                                
                                                </button>
                                                <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                    <i class="far fa-heart mt-1"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class=" mb-3 d-flex">
                                <div class="col-md-4  mt-2 border border-dark">
                                    <div class="trend-mg d-flex">
                                        <a href="" class="product-horizontal-img col-4">
                                            <div class="product-img-outer col-4">
                                                <img class="img-fluid style-img-trend" src="assets/img/trending/noi-nau-Hamilton.jpeg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-52%</font>
                                            </div>
                                        </a>
                                        <div class="product-horizontal-load col-8">
                                            <div class="card-title">
                                                <a href="" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        Nồi nấu chậm Hamilton Beach5.5 | <br> it 33956A-SAU
                                                    </font>
                                                </a>
                                            </div>
                                            <div class="meta-row">
                                                <div class="rating-col">
                                                    <div class="rating-group d-flex">
                                                        <div class="rating-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>                                                        </div>
                                                        <div class="lable-field">
                                                            <span class="rating-label number-fiel">
                                                                <font style="vertical-align: inherit;">(3,85)</font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">･ </font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">Việt Nam</font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">4,202,000<sup>đ</sup></span>
                                                    <span class="old-price">8,764,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-4 mx-2 mt-2 border border-dark">
                                    <div class="trend-mg d-flex">
                                        <a href="" class="product-horizontal-img col-4">
                                            <div class="product-img-outer col-4">
                                                <img class="img-fluid style-img-trend" src="assets/img/trending/hopxay-La-fonte.jpeg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-52%</font>
                                            </div>
                                        </a>
                                        <div class="product-horizontal-load col-8">
                                            <div class="card-title">
                                                <a href="" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        Hộp xay thức ăn đa năng LA Fonte <br> - 006804
                                                    </font>
                                                </a>
                                            </div>
                                            <div class="meta-row">
                                                <div class="rating-col">
                                                    <div class="rating-group d-flex">
                                                        <div class="rating-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>                                                        </div>
                                                        <div class="lable-field">
                                                            <span class="rating-label number-fiel">
                                                                <font style="vertical-align: inherit;">(3,28 nghìn)</font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">･ </font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">Việt Nam</font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">314,000<sup>đ</sup></span>
                                                    <span class="old-price">654,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mx-2 mt-2 border border-dark">
                                    <div class="trend-mg d-flex">
                                        <a href="" class="product-horizontal-img col-4">
                                            <div class="product-img-outer col-4">
                                                <img class="img-fluid style-img-trend" src="assets/img/trending/dung-cu-xx.jpeg" alt="">
                                            </div>
                                            <div class="product-horizontal-card col-8">
                                                <span class="product-discount"></span>
                                                <font style="vertical-align: inherit;">-19%</font>
                                            </div>
                                        </a>
                                        <div class="product-horizontal-load col-8">
                                            <div class="card-title">
                                                <a href="" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        Bộ dụng cụ làm xúc xích KithcenAi <br>a SSA     
                                                    </font>
                                                </a>
                                            </div>
                                            <div class="meta-row">
                                                <div class="rating-col">
                                                    <div class="rating-group d-flex">
                                                        <div class="rating-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                                                                                   
                                                        </div>
                                                        <div class="lable-field">
                                                            <span class="rating-label number-fiel">
                                                                <font style="vertical-align: inherit;">(2,84 nghìn)</font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">･ </font>
                                                            </span>
                                                            <span class="rating-label">
                                                                <font style="vertical-align: inherit;">Việt Nam</font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <span class="current-price">652,000<sup>đ</sup></span>
                                                </div>
        
                                                <!-- control -->
                                                <div class="control-group-trending col-md-6">
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart trending-style">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn trending-style favorite-btn-trending">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-outline-dark buy-now">Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- home seggest -->
    <section class="home-suggest-section mt-5">
        <div class="section-head">
            <div class="head-title">
                <div class="section-title-text text-center">Sản phẩm nhập khẩu chọn lọc</div>
            </div>
        </div>
        <div class="container">
            <!-- trang phục -->
            <div class="home-suggest-block">
                <div class="block-head d-flex">
                    <div class="block-head-title col-md-6">
                        <a href="#">Trang phục</a>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="tab-segment col-md-6 d-flex">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style active" id="shirt-tab" data-bs-toggle="tab" data-bs-target="#shirt" type="button" role="tab" aria-controls="home" aria-selected="true">Áo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style" id="trousers-tab" data-bs-toggle="tab" data-bs-target="#trousers" type="button" role="tab" aria-controls="profile" aria-selected="false">Quần</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style" id="sweater" data-bs-toggle="tab" data-bs-target="#sweater" type="button" role="tab" aria-controls="contact" aria-selected="false">Áo len</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bd-style" id="nn" data-bs-toggle="tab" data-bs-target="#nn" type="button" role="tab" aria-controls="contact" aria-selected="false">Ngắn ngủi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bd-style" id="jacket" data-bs-toggle="tab" data-bs-target="#jacket" type="button" role="tab" aria-controls="contact" aria-selected="false">Áo khoác</button>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark buy-now suggest-btn fw-bold">Xem tất cả</a>
                    </div>
                </div>
                <div class="block-body mt-3">
                    <div class="tab-content" id="myTabContent">
                        <!-- shirt -->
                        <div class="tab-pane fade show active" id="shirt" role="tabpanel" aria-labelledby="shirt-tab">
                            <div class="row mb-2">
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense.jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-45%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Áo phông logo màu đen
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">4,475,864<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">8,137,034<sup>đ</sup></span>
                                    </div>
                                </div>
                                
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (7).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-24%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Áo corset Leia xanh
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">6,160,789<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">8,106,313<sup>đ</sup></span>

                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (2).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-16%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Áo phông họa tiết son môi
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">3,862,732<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">4,598,490<sup>đ</sup></span>

                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (1).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-2%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Áo sơ mi ngắn tay có cổ màu đen
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">3,740,105<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">5,054,196<sup>đ</sup></span>

                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (3).jpg" alt="">
                                            </div>
                                           
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Black La Montagne 'La Maille <br>Ascu'Top
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">6,190,275<sup>đ</sup></span>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>

                        <!-- trousers -->
                        <div class="tab-pane fade " id="trousers" role="tabpanel" aria-labelledby="trousers-tab">
                            <div class="row mb-2">
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (4).jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Green Storm-FIT Run Division <br> Quần Phenom Elite Flash Lounge 
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">4,061,015<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (5).jpg" alt="">
                                            </div>
                                           
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Quần dài màu đen có logo Sweat <br> Lounge
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">3,246,000<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (6).jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                   Quần dài Taupe Track Lounge
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">3,709,449<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (8).jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Quần dài Jogger màu trắng ấm cúng dệt kim
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">3,249,600<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (9).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-25%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Quần Cargo Creatch màu đen
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price style-price">16,968,428<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">22,624,571<sup>đ</sup></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- giày dép -->
            <div class="home-suggest-block mt-1">
                <div class="block-head d-flex">
                    <div class="block-head-title col-md-6">
                        <a href="#">Giày dép</a>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <!-- tab segment -->
                    <div class="tab-segment1 col-md-6 d-flex">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style active" id="boot-tab" data-bs-toggle="tab" data-bs-target="#boot" type="button" role="tab" aria-controls="home" aria-selected="true">Giày ống</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style" id="boot-tab" data-bs-toggle="tab" data-bs-target="#boot" type="button" role="tab" aria-controls="profile" aria-selected="false">Giày thể thao</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style" id="sweater" data-bs-toggle="tab" data-bs-target="#sweater" type="button" role="tab" aria-controls="contact" aria-selected="false">Dép xăng đan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bd-style" id="nn" data-bs-toggle="tab" data-bs-target="#nn" type="button" role="tab" aria-controls="contact" aria-selected="false">Gót chân</button>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark buy-now suggest-btn fw-bold">Xem tất cả</a>
                    </div>
                </div>
                <div class="block-body mt-3">
                    <div class="tab-content" id="myTabContent">
                        <!-- boot -->
                        <div class="tab-pane fade show active" id="boot" role="tabpanel" aria-labelledby="shirt-tab">
                            <div class="row mb-2">
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (10).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-35%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Bốt máy kéo Black Beatle Bozo
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">22,348,661<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">34,382,556<sup>đ</sup></span>
                                    </div>
                                </div>
                                
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (11).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-26%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Balck Terrex Swift R3 Gtx Boots
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">9,816,008<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">13,264,875<sup>đ</sup></span>

                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (12).jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                   Giày cao gót màu trắng <br>Bianchetto Tabi
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">35,661,880<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (13).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-56%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                   Black Beatle Field Boots
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">19,782,704<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">44,960,691<sup>đ</sup></span>

                                    </div>
                                </div>

                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/fado_ssense (14).jpg" alt="">
                                            </div>
                                            <div class="product-tag">
                                                <span class="deal-discount">
                                                    <font style="vertical-align: inherit;">-13%</font>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Green 1460 Pascal Verso Boots
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">4,782,430<sup>đ</sup></span>
                                        </div>
                                        <span class="old-price">5,497,046<sup>đ</sup></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sneaker -->
                        <div class="tab-pane fade " id="boot" role="tabpanel" aria-labelledby="sneaker-tab">
                           
                        </div>
                    </div>
                </div>
            </div>

            <!-- camera -->
            <div class="home-suggest-block mt-1">
                <div class="block-head d-flex">
                    <div class="block-head-title col-md-6">
                        <a href="#">Máy ảnh</a>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <!-- tab segment -->
                    <div class="tab-segment2 col-md-6 d-flex">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style active" id="digital-camera-tab" data-bs-toggle="tab" data-bs-target="#digital-camera" type="button" role="tab" aria-controls="home" aria-selected="true">Máy ảnh kỹ thuật số</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style" id="boot-tab" data-bs-toggle="tab" data-bs-target="#boot" type="button" role="tab" aria-controls="profile" aria-selected="false">Máy ảnh film</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link bd-style" id="sweater" data-bs-toggle="tab" data-bs-target="#sweater" type="button" role="tab" aria-controls="contact" aria-selected="false">Ống kính</button>
                            </li>
                            
                        </ul>
                        <a href="#" class="btn btn-outline-dark buy-now suggest-btn fw-bold">Xem tất cả</a>
                    </div>
                </div>
                <div class="block-body mt-3">
                    <div class="tab-content" id="myTabContent">
                        <!-- boot -->
                        <div class="tab-pane fade show active" id="digital-camera" role="tabpanel" aria-labelledby="digital-camera-tab">
                            <div class="row mb-2">
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/8161tUdEWpL._SR200,200_.jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body style-text" >
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Máy ảnh vlogging, Máy ảnh kỹ thuật số 4K cho YouTube với WiFi, Zoom kỹ thuật số 16X zoom top1e, Màn hình lật 180 độ, 
                                                    Ống kính góc rộng, Ống kính macro, 2 pin và thẻ TF 32GB
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">4,560,821<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/71S6oT4GPsL._SR200,200_.jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body style-text">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Máy ảnh kỹ thuật số Nikon COOLPIX W300 (Đen) với Gói phụ kiện sang trọng - Bao gồm: Thẻ nhớ SanDisk Ultra 64GB, 
                                                    Pin thay thế tuổi thọ kéo dài, Hộp đựng máy ảnh, Dây đeo cổ tay nổi và hơn thế nữa                                               
                                                 </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">11,336,595<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/71uZyQ-JyHL._SR200,200_.jpg" alt="">
                                            </div>
                                            
                                        </a>
                                    </div>
                                    <div class="product-deal-body style-text">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Máy ảnh kỹ thuật số, Máy ảnh kỹ thuật số trẻ em FHD 1080P 36.0 MP, Máy ảnh video vlog, 
                                                    Máy ảnh di động có thể sạc lại với thẻ SD 32G, Zoom kỹ thuật số 16X, Màn hình LCD cho học sinh thiếu niên mới bắt đầu
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">1,851,021<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/71Xjz9OQxPL._SR200,200_.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body style-text">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Máy ảnh kỹ thuật số Sony Cyber-Shot DSC-W800 (Đen) + Thẻ nhớ Ultra 64GB SDXC, 
                                                    Vỏ đựng máy ảnh Point & Shoot chống nước và hơn thế nữa (Gói 8pc)
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">5,876,600<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col mx-2 p-1 product-grid">
                                    <div class="product-deal-head">
                                        <a href="" class="product-card">
                                            <div class="product-img">
                                                <img class="img-fluid style-suggest-img" src="assets/img/suggest/91btQgPuWIL._SR200,200_.jpg.crdownload" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-deal-body style-text">
                                        <div class="card-title">
                                            <a href="" class="title-inner">
                                                <font style="vertical-align: inherit;">
                                                    Máy ảnh DSLR Canon EOS 2000D (Rebel T7) w / Ống kính zoom Canon EF-S 18-55mm F / 3.5-5.6 + Vỏ + Bộ nhớ 128GB (Gói 28pc)
                                                </font>
                                            </a>
                                        </div>
                                        <div class="price-group style-price">
                                            <!-- price -->
                                            <span class="current-price">16,550,991<sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sneaker -->
                        <div class="tab-pane fade " id="boot" role="tabpanel" aria-labelledby="sneaker-tab">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feedback -->
    <section class="home-feedback-section">
        <div class="section-head">
            <div class="container">
                <div class="section-head-inner d-flex">
                    <div class="section-title">
                        <a href="#" class="section-tilte-inner ">
                            Nhận xét từ khách hàng
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <a href="#"class="write-feedback btn btn-dark buy-now fw-bold">Gửi đánh giá của Quý Khách</a>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- slider-segment-feedback -->
            <div class="home-feedback-block d-flex mt-4">
                <div class="col-md-3 feedback-panel-outer">
                    <div class="feedback-panel">
                        <!-- feedack-head -->
                        <div class="panel-head">
                            <div class="img-col">
                                <div class="avatar-field">
                                    <span class="avatar-label">
                                        <font style="vertical-align: inherit;">VK</font>
                                    </span>
                                </div>
                            </div>
                            <div class="info-col">
                                <div class="customer-name-outer">
                                    <div class="customer-name">
                                        <font style="vertical-align: inherit;"> LoveFish Aqua @ gmail.com</font>
                                    </div>
                                </div>
                                <div class="customer-job">
                                    <font style="vertical-align: inherit;">Khách hàng</font>
                                </div>
                            </div>
                        </div>
                        <!-- feedback-body -->
                        <div class="panel-body">
                            Như bên dưới đây. Rãnh quá bắt viêt bình luận mà phải trên 50 ký tự
                        </div>
                    </div>
                </div>

                <div class="col-md-3 feedback-panel-outer">
                    <div class="feedback-panel">
                        <!-- feedack-head -->
                        <div class="panel-head">
                            <div class="img-col">
                                <div class="avatar-field">
                                    <span class="avatar-label">
                                        <font style="vertical-align: inherit;">NN</font>
                                    </span>
                                </div>
                            </div>
                            <div class="info-col">
                                <div class="customer-name-outer">
                                    <div class="customer-name">
                                        <font style="vertical-align: inherit;"> Nguyễn Huy Nhât Nam@ gmail.com</font>
                                    </div>
                                </div>
                                <div class="customer-job">
                                    <font style="vertical-align: inherit;">Khách hàng</font>
                                </div>
                            </div>
                        </div>
                        <!-- feedback-body -->
                        <div class="panel-body">
                            Giao hàng nhanh chóng. Sản phẩm đóng gói cẩn thận. Giá tốt. 
                        </div>
                    </div>
                </div>

                <div class="col-md-3 feedback-panel-outer">
                    <div class="feedback-panel">
                        <!-- feedack-head -->
                        <div class="panel-head">
                            <div class="img-col">
                                <div class="avatar-field">
                                    <span class="avatar-label">
                                        <font style="vertical-align: inherit;">NP</font>
                                    </span>
                                </div>
                            </div>
                            <div class="info-col">
                                <div class="customer-name-outer">
                                    <div class="customer-name">
                                        <font style="vertical-align: inherit;"> Đỗ Nhật Phong @ gmail.com</font>
                                    </div>
                                </div>
                                <div class="customer-job">
                                    <font style="vertical-align: inherit;">Khách hàng</font>
                                </div>
                            </div>
                        </div>
                        <!-- feedback-body -->
                        <div class="panel-body">
                            Thời điểm BF, thời gian chờ hàng về vẫn chấp nhận được. 5 sao!                                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 feedback-panel-outer">
                    <div class="feedback-panel">
                        <!-- feedack-head -->
                        <div class="panel-head">
                            <div class="img-col">
                                <div class="avatar-field">
                                    <span class="avatar-label">
                                        <font style="vertical-align: inherit;">NY</font>
                                    </span>
                                </div>
                            </div>
                            <div class="info-col">
                                <div class="customer-name-outer">
                                    <div class="customer-name">
                                        <font style="vertical-align: inherit;"> Phạm Ngọc Yến @ gmail.com</font>
                                    </div>
                                </div>
                                <div class="customer-job">
                                    <font style="vertical-align: inherit;">Khách hàng</font>
                                </div>
                            </div>
                        </div>
                        <!-- feedback-body -->
                        <div class="panel-body">
                            Đồng hồ rất đẹp, giá cả phải chăng và giao hàng nhanh. Mình sẽ ủng hộ fado trong thời gian tới.                                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('views/layout/footer.php');
?>