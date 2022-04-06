<!-- Page Header
============================================================== --> 
<div class="page-head">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Home</a> / Portfolio</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- News Wrap
        ============================================================== --> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrap">
                <div class="gallery-cont clearfix">
                    <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter="<?php foreach ($services as $item): ?> cat_<?php echo $item->service_id ?> <?php endforeach ?>">All</span></li>
                        <?php foreach ($services as $item): ?> 
                            <li><span class="filter" data-filter="cat_<?php echo $item->service_id ?>"><?php echo $item->title ?></span></li>
                        <?php endforeach ?>

                    </ul>
                    <div id="galthreegrid" class="clearfix">
                        <?php foreach ($items as $item): ?> 
                            <div class="gal-item-three cat_<?php echo $item->service_id ?>" data-cat="cat_<?php echo $item->service_id ?>">
                                <div class="gal-wrapper">
                                    <img src="<?php echo $item->image ?>" alt="" >
                                    <div class="gal-dtls">
                                        <h4><?php echo $item->title ?></h4>
                                        <a href="<?php echo $item->image ?>" class="zoom-box"><i class="fa fa-camera"></i></a>
                                        <a href="<?php echo $item->link ?>"  target="_blank" class="link-box"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>   

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>