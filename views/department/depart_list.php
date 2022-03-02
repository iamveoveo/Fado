    <!-- department -->
    <section class="home-feature-department">
        <div class="container">
            <div class="feature-department-block">
                <!-- block-head -->
                <div class="block-head">
                    <div class="block-head-icon">
                        <img src="https://stfe.fadoglobal.io/desktop/image/icon-svg/icon-mall-section.svg" alt="">
                    </div>
                    <div class="block-head-title">Thương hiệu nổi bật</div>

                    <!-- pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item disabled ">
                                <a  href="#" aria-label="Previous"class="page-link slick-prev slick-arrow">
                                    <i class="fas fa-angle-left"></i>                            
                                </a>
                            </li>
                            <li class="page-item mx-2">
                                <a href="#" aria-label="Next" class="page-link ">
                                    <i class="fas fa-angle-right"></i>                                
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- block-body -->
                <div class="swiper-container">
                        <div class="">
                          
                            <div class=" autoplay slick"> 
                                <?php foreach ($manufacture as $row):?>
                                    <div class="col-md-2 mx-1 brand-reputation">
                                        <div class="cate-item">
                                            <a href="<?php echo SITEURL . '?controller=product&action=list&id="' . $row['ManuID'] . '"';?>" class="cate-item-img">
                                                <span class="cate-img-inner">
                                                    <img class="cate-img" src="assets/img/upload/<?php echo $row['ManuLogo'];?>" alt="<?php echo $row['ManuLogo'];?>">
                                                </span>
                                            </a>
                                            <div class="cate-item-body">
                                                <a href="" class="cate-item-title"><?php echo $row['ManuName'];?></a>                                  
                                                <div class="cate-item-des">
                                                    <font style="vertical-align: inherit;"><?php echo $row['ManuCountry'];?></font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </section>

