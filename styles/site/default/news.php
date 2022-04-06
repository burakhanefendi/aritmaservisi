<!-- Page Header
============================================================== --> 
<div class="page-head">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Home</a> / Blog</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- News Wrap
        ============================================================== -->  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <?php echo ads(3) ?></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           
            <div class="news-wrap">
                <?php foreach ($items as $item): ?> 
                    <div class="property-item clearfix">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="list-property-img">
                                    <a href="<?php echo site_url('post/index/' . $item->blog_id) ?>"><img src="<?php echo $item->image ?>" alt="" ></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="list-property-desc">
                                    <h4>
                                        <a href="<?php echo site_url('post/index/' . $item->blog_id) ?>"><?php echo $item->title ?></a>
                                        <span class="blog-date"><i class="fa fa-calendar"></i> <?php echo date('M d, Y h:i:s A', strtotime($item->datetime)) ?></span>
                                    </h4>
                                    <p>
                                        <?php $this->load->helper('text') ?>
                                        <?php echo word_limiter($item->description, 50) ?> 
                                    </p>
                                    <div class="pro-btn-box">
                                        <a href="<?php echo site_url('post/index/' . $item->blog_id) ?>" class="pro-ln-mor"> Read more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>