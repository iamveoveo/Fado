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
                            <?php $i = 0;
                                foreach ($tagTrend as $row):?>
                                <li class="nav-item " role="presentation">
                                    <button class="nav-link tab-style-item <?php echo $i==0 ? 'active' : '' ;?>" id="tab-<?php echo $row['TagID'] ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $row['TagID'];?>" type="button" role="tab" aria-controls="profile" aria-selected="false"><?php echo $row['TagName'];?></button>
                                </li>
                            <?php $i++; 
                                endforeach; ?>
                        </ul>
                    </div>
                </div>    
                <div class="block-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="<?php echo $tagTrend[0]['TagID']?>" role="tabpanel" aria-labelledby="tab-<?php echo $tagTrend[0]['TagID']?>">
                            <div class="row mb-2">
                                <?php $i = 0;
                                    foreach ($prodByTag as $row): ?>
                                    <div class="col mx-2 p-1 product-grid border border-dark">
                                        <div class="product-deal-head">
                                            <a href="<?php echo SITEURL . '?controller=product&action=show&id="' . $row['ProdID'] . '"'; ?>" class="product-card">
                                                <div class="product-img">
                                                    <img class="img-fluid" src="assets/img/upload/<?php echo $row['ProdImg']; ?>" alt="">
                                                </div>
                                                <?php if($row['Discount'] != 0):?>
                                                    <div class="product-tag">
                                                        <span class="deal-discount">
                                                            <font style="vertical-align: inherit;">-<?php echo $row['Discount'];?>%</font>
                                                        </span>                                                
                                                    </div>
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="product-deal-body">
                                            <div class="price-group">
                                                <!-- price -->
                                                <?php if($row['Discount'] != 0):?>
                                                    <span class="current-price"><?php echo number_format($row['ProdPrice'] - (($row['ProdPrice'] * $row['Discount']) / 100)); ?><sup>đ</sup></span>
                                                    <span class="old-price"><?php echo number_format($row['ProdPrice']);?><sup>đ</sup></span>
                                                <?php else:?>
                                                    <span class="current-price"><?php echo number_format($row['ProdPrice']);?><sup>đ</sup></span>
                                                <?php  endif;?>
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
                                                                <font style="vertical-align: inherit;"><?php echo $row['ManuCountry'];?></font>
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
                                <?php $i++; 
                                    if ($i >4){
                                        break;
                                    }
                                endforeach; ?>
                            </div>

                            <div class=" mb-3 d-flex">
                                <?php for($i=5; $i<8 && $i<count($prodByTag); $i++): ?>
                                <div class="col-md-4  mt-2 border border-dark">
                                    <div class="trend-mg d-flex">
                                        <a href="<?php echo SITEURL . '?controller=product&action=show&id="' . $prodByTag[$i]['ProdID'] . '"'; ?>" class="product-horizontal-img col-4">
                                            <div class="product-img-outer col-4">
                                                <img class="img-fluid" src="assets/img/upload/<?php echo $prodByTag[$i]['ProdImg']; ?>" alt="<?php echo $prodByTag[$i]['ProdImg']; ?>">
                                            </div>
                                            <?php if($prodByTag[$i]['Discount'] != 0):?>
                                                <div class="product-horizontal-card col-8">
                                                    <span class="product-discount"></span>
                                                    <font style="vertical-align: inherit;">-<?php echo $prodByTag[$i]['Discount'];?>%</font>
                                                </div>
                                            <?php endif; ?>
                                                
                                        </a>
                                        <div class="product-horizontal-load col-8">
                                            <div class="card-title">
                                                <a href="" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        <?php echo $prodByTag[$i]['ProdName'];?>
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
                                                                <font style="vertical-align: inherit;"><?php echo $prodByTag[$i]['ManuCountry'];?></font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row mb-3">
                                                <div class="price-group-treding col-md-6">
                                                    <!-- price -->
                                                    <?php if($prodByTag[$i]['Discount'] != 0):?>
                                                        <span class="current-price"><?php echo number_format($prodByTag[$i]['ProdPrice'] - (($prodByTag[$i]['ProdPrice'] * $prodByTag[$i]['Discount']) / 100)); ?><sup>đ</sup></span>
                                                        <span class="old-price"><?php echo number_format($prodByTag[$i]['ProdPrice']);?><sup>đ</sup></span>
                                                    <?php else:?>
                                                        <span class="current-price"><?php echo number_format($prodByTag[$i]['ProdPrice']);?><sup>đ</sup></span>
                                                    <?php  endif;?>
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
                                <?php endfor; ?>
                                
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
