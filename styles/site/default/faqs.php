<!-- Page Header
============================================================== --> 
<div class="page-head">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Home</a> / Faqs </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9">
            <div class="panel-group" id="accordion">

                <?php foreach ($items as $item): ?> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#<?php echo $item->faq_id ?>"> <?php echo $item->question ?> </a> </h4>
                        </div>
                        <div id="<?php echo $item->faq_id ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    <?php echo $item->answer ?>
                                    <br>
                                </p>                                    
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
        <!-- Portfolio item slider start -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <div class="ads-block">
                <?php echo ads(1) ?>
            </div>
        </div>

    </div>

</div><!-- Toggle start -->


