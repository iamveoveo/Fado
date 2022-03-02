    <!-- home-deal -->
    <section class="home-deal">
        <div class="container">
            <div class="section-inner">
                <div class="section-head d-flex">
                    <div class="head-icon-col">
                        <div class="icon-shape">
                            <img src="https://stfe.fadoglobal.io/desktop/image/icon-svg/icon-deal-section.svg" alt="">
                        </div>
                    </div>
                    <div class="head-title-col">
                        <a href="today-deal.html" class="section-title">
                            Sản phẩm đang giảm giá khắp thế giới
                            <i class="fas fa-chevron-right" style="font-size: 14px;"></i>                        
                        </a>
                    </div>

                    <!-- tab deal -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link bd-style active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Khắp thế giới</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link bd-style" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Săn Deal Deluxe</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link bd-style" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Săn Deal Việt Nam</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bd-style" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Săn Deal từ Mỹ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bd-style" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Săn Deal từ Nhật</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bd-style" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-Germany" type="button" role="tab" aria-controls="contact" aria-selected="false">Săn Deal từ Đức</button>
                        </li>
                          
                    </ul>
                </div>
                <!-- section body -->
                <div class="section-body">
                    <div class="tab-item-wrap">
                        <!--  -->
                        <div class="tab-content" id="myTabContent">
                            <!-- khắp thế giới -->
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <?php foreach ($prodByVou as $row):?>
                                        <div class="col mx-2 p-1 product-grid">
                                            <div class="product-deal-head">
                                                <a href="<?php echo SITEURL . '?controller=product&action=show&id="' . $row['ProdID'] . '"'; ?>" class="product-card">
                                                    <div class="product-img">
                                                        <img class="img-fluid" src="assets/img/upload/<?php echo $row['ProdImg']; ?>" alt="">
                                                    </div>
                                                    <div class="product-tag">
                                                        <span class="deal-discount">
                                                            <font style="vertical-align: inherit;">-<?php echo $row['Discount'];?>%</font>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product-deal-body">
                                                <div class="price-group">
                                                    <!-- price -->
                                                    <span class="current-price"><?php echo $row['ProdPrice'] - (($row['ProdPrice'] * $row['Discount']) / 100); ?><sup>đ</sup></span>
                                                    <span class="old-price"><?php echo $row['ProdPrice']?><sup>đ</sup></span>
                                                </div>
                                                <div class="card-title">
                                                    <a href="" class="title-inner">
                                                        <font style="vertical-align: inherit;">
                                                            <?php echo $row['ProdName'];?>
                                                        </font>
                                                    </a>
                                                </div>
                                                <div class="meta-row">
                                                    <div class="rating-col">
                                                        <div class="rating-group d-flex">
                                                            <div class="rating-star">
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>                                                       
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>                                                        
                                                            </div>
                                                            <div class="lable-field">
                                                                <span class="rating-label number-fiel">
                                                                    <font style="vertical-align: inherit;">(0)</font>
                                                                </span>
                                                                <span class="rating-label">
                                                                    <font style="vertical-align: inherit;">･ </font>
                                                                </span>
                                                                <span class="rating-label">
                                                                    <font style="vertical-align: inherit;"><?php echo $row['ManuCountry']?></font>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- control -->
                                                <div class="control-group">
                                                    <button class="btn btn-outline-dark buy-now">Mua ngay</button>
                                                    <button title="Thêm vào giỏ hàng" class="btn add-cart">
                                                        <i class="bi bi-cart-plus"></i>                                                
                                                    </button>
                                                    <button title="Thêm vào yêu thích" class="btn favorite-btn">
                                                        <i class="far fa-heart mt-1"></i>
                                                    </button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>