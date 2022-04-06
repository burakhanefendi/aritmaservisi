<!-- Page Header
============================================================== --> 
<div class="page-head">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Home</a> / <?php echo $item->title ?></h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="news-wrap">
                <div class="news-blk">
                    <h1><?php echo $item->title ?></h1>
                    <p>
                        <?php echo $item->content ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
