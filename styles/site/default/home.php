
<!-- Home Slider
============================================================== -->
<div class="home-slider clearfix">
    <ul class="slides">

        <?php foreach ($sliders as $item): ?>  
            <li>
                <a href=""><img src="<?php echo $item->image ?>" data-thumb="<?php echo $item->image ?>" alt="" /></a>

<!--                <div class="container">-->
<!--                    <div class="slider-wrap">-->
<!--                        <div class="slider-desc">-->
<!--                            <h3>--><?php //echo $item->title ?><!--</h3>-->
<!--                            <p>--><?php //echo $item->description ?><!--</p>-->
<!--                        </div>-->
<!---->
<!--                    </div> -->
<!--                </div>-->
            </li>
        <?php endforeach ?>
    </ul>
</div> 

<!-- Home Service
============================================================== -->
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-lg-6">
            <img alt="yetkili su arıtma servisi" src="/styles/site/default/assets/images/su-aritma-servisi-banner-1.png">
        </div>
        <div class="col-lg-6">
            <img alt="yetkili su arıtma servisi filtre değişimi" src="/styles/site/default/assets/images/su-aritma-servisi-banner.jpeg">
        </div>
    </div>

</div>
<div class="container">
    <div class="content-head">
        <h2 Class="title"> 
            <span>Hizmetlerimiz - Yetkili Su Arıtma Servisi</span>
        </h2>
    </div>

    <div class="row">
        <?php foreach ($categories as $item): ?>    
            <div class="col-md-3 col-sm-3 wow flipInX animated" data-delay="100" style="visibility: visible;">
                <div class="item">
                    <div class="team-wrapper">
                        <div class="team-img-wrapper">
                            <img alt="" src="<?php echo $item->image ?>" class="img-circle">
                        </div>
                        <div class="team-content">
                            <h3 class="name">
                                <?php echo $item->title ?>
                            </h3>

                        </div>
                    </div><!--/ Team wrapper end -->
                </div><!--/ Item 1 end -->
            </div><!--/ End first service -->
        <?php endforeach ?>
    </div><!--/ Team row end -->

</div>

<!-- Latest Projects
============================================================== -->
<div class="container">
    <div class="content-head">
        <h2 Class="title">
            <span>Ürün Galerimiz</span>
        </h2>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrap">
                <div class="gallery-cont clearfix">

                    <div id="galthreegrid" class="clearfix">
                        <?php foreach ($items as $item): ?>
                        <a href="<?php echo $item->image ?>" class="zoom-box">
                            <div class="gal-item-three">
                                <div class="gal-wrapper">
                                    <img src="<?php echo $item->image ?>" alt="<?php echo $item->title ?>" >
                                    <div class="gal-dtls">
                                        <h4><?php echo $item->title ?></h4>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach ?>    
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Home Banner
============================================================== -->
<div class="banner-block" style="text-align: center;">
    <div class="banner-filter"></div>
    <div class="container blog-desc">
        <p class="blog-desc-home">Su arıtma servis randevusu ve diğer tüm sorularınız için çağrı merkezimize 7/24 ulaşabilirsiniz.
            <a href="<?php echo site_url('news') ?>" class="banner-link">  0212 634 3300  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </p>
    </div>

</div>




<!-- Home Ads
============================================================== -->
<!--<div class="manual-banner">-->
<!--    <div class="">-->
<!--        --><?php //echo ads(4) ?>
<!--    </div>-->
<!--</div>-->