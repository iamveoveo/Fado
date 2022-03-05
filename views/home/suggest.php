<!-- home suggest -->
<section class="home-suggest-section mt-5">
    <div class="section-head">
        <div class="head-title">
            <div class="section-title-text text-center">Sản phẩm nhập khẩu chọn lọc</div>
        </div>
    </div>
    <div class="container">
        
        <?php foreach ($bigTag as $row): ?>
            <div class="home-suggest-block">
                <div class="block-head d-flex">
                    <div class="block-head-title col-md-6">
                        <a href="<?php echo SITEURL . "?controller=category&BigTag=" . $row['TagID']; ?>"><?php echo $row['TagName']; ?></a>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="tab-segment col-md-6 d-flex">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php $i=0;
                             foreach ($tagInBigTag[$row['TagID']] as $row1): ?>
                             <?php $i==0 ? $childTag =  $row1['TagID'] :''; ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link bd-style <?php echo $i==0 ?'active' : ''; ?>" id="<?php echo $row1['TagID']; ?>-tab" data-bs-toggle="tab" data-bs-target="#shirt" type="button" role="tab" aria-controls="home" aria-selected="true"><?php echo $row1['TagName']; ?></button>
                                </li>
                            <?php $i++;
                                endforeach; ?>
                        </ul>
                        <a href="#" class="btn btn-outline-dark buy-now suggest-btn fw-bold">Xem tất cả</a>
                    </div>
                </div>
                <div class="block-body mt-3">
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="<?php echo $childTag;?>" role="tabpanel" aria-labelledby="<?php echo $childTag;?>-tab">
                            <div class="row mb-2">
                                <?php foreach ($prodOfChildTag[$childTag] as $row2): ?>
                                    <div class="col mx-2 p-1 product-grid">
                                        <div class="product-deal-head">
                                            <a href="<?php echo SITEURL . "?controller=product&action=show&TagID=" . $row2['TagID']; ?>" class="product-card">
                                                <div class="product-img">
                                                    <img class="img-fluid style-suggest-img" src="assets/img/upload/<?php echo $row2['ProdImg']; ?>" alt="">
                                                </div>
                                                <?php if($row2['Discount'] != 0): ?>
                                                    <div class="product-tag">
                                                        <span class="deal-discount">
                                                            <font style="vertical-align: inherit;">-<?php echo $row2['Discount']; ?>%</font>
                                                        </span>
                                                    </div>
                                                <?php endif;?>
                                            </a>
                                        </div>
                                        <div class="product-deal-body">
                                            <div class="card-title">
                                                <a href="<?php echo SITEURL . "?controller=product&action=show&TagID=" . $row2['TagID']; ?>" class="title-inner">
                                                    <font style="vertical-align: inherit;">
                                                        <?php echo $row2['ProdName']; ?>
                                                    </font>
                                                </a>
                                            </div>
                                            <div class="price-group style-price">
                                                <!-- price -->
                                                <span class="current-price"><?php echo $row2['Discount'] != 0? number_format($row2['ProdPrice'] - (($row2['ProdPrice'] * $row2['Discount']) / 100)) : number_format($row2['ProdPrice']);?><sup>đ</sup></span>
                                            </div>
                                            <span class="old-price">8,137,034<sup>đ</sup></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>