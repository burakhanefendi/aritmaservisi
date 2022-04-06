<!-- Page Header
============================================================== --> 
<div class="page-head">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Home</a> / Services / <?php echo $item->title ?></h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9">
            <section class="service-details">
                <div class="service-img">
                    <img src="<?php echo $item->image ?>">
                </div>
                <div class="service-content">
                    <?php foreach (explode("\n", $item->description) as $i): ?>
                        <p> <?php echo $i ?></p>
                    <?php endforeach; ?>

                </div>
                <div class="service-how-do">
                    <h1>  How it work :</h1>
                    <ul>
                        <?php foreach (explode("\n", $item->how_work) as $i): ?>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $i ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="service-benfits">
                    <h1> Service Features : </h1>
                    <ul>
                        <?php foreach (explode("\n", $item->benfits) as $i): ?>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $i ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>

            <div class="partners-blk" style="position: relative">
                <div class="partner-head">
                    <h3> Related Projects</h3>
                    <div class="part-prev" onclick="next()"><i class="fa fa-chevron-left"></i></div>
                    <div class="part-next" onclick="prev()"><i class="fa fa-chevron-right"></i></div>
                </div>
                <div class="">
                    <?php foreach ($this->db->where('service_id', $item->service_id)->get('projects', 9)->result() as $projects): ?>
                        <div class="partner-blk col-md-4 col-sm-12" style="display: none;">
                            <a href="<?php echo $projects->link ?>" target="_blank"><img style="width: 100px;" src="<?php echo $projects->image ?>" alt="" ></a>
                        </div>
                    <?php endforeach ?>
                </div>
                <div style="clear: both"></div>
            </div>
            <script>
                var totalItems = jQuery('.partner-blk').length;
                var lastSelectedIndex = 0;
                function next() {
                    // PC
                    if (jQuery(window).width() >= '991') {
                        if (lastSelectedIndex >= totalItems)
                            lastSelectedIndex = 0;

                        if (lastSelectedIndex == 0) {
                            jQuery('.show').removeClass('show');
                            jQuery('.partner-blk:lt(3)').addClass('show');
                            lastSelectedIndex = 3;
                        }
                        else
                        {
                            nextElem = jQuery('.partner-blk').slice(lastSelectedIndex, lastSelectedIndex + 3);
                            lastSelectedIndex = lastSelectedIndex + 3;
                            jQuery('.show').removeClass('show');
                            nextElem.addClass('show');
                        }
                    }
                    else
                    {
                        if (lastSelectedIndex >= totalItems)
                            lastSelectedIndex = 0;

                        if (lastSelectedIndex == 0) {
                            jQuery('.show').removeClass('show');
                            jQuery('.partner-blk:lt(1)').addClass('show');
                            lastSelectedIndex = 1;
                        }
                        else
                        {
                            nextElem = jQuery('.partner-blk').slice(lastSelectedIndex, lastSelectedIndex + 1);
                            lastSelectedIndex = lastSelectedIndex + 1;
                            jQuery('.show').removeClass('show');
                            nextElem.addClass('show');
                        }

                    }
                }
                function prev() {
                    console.log(lastSelectedIndex);
                    // PC
                    if (jQuery(window).width() >= '991') {
                        if (lastSelectedIndex >= totalItems)
                            lastSelectedIndex = 0;


                        if (lastSelectedIndex <= 3) {
                            jQuery('.show').removeClass('show');
//                            jQuery('.partner-blk:lt(-3)').addClass('show');
                            lastSelectedIndex = totalItems;
                        }

                        {
                            lastSelectedIndex = lastSelectedIndex - 3;
                            nextElem = jQuery('.partner-blk').slice(lastSelectedIndex, lastSelectedIndex + 3);

                            jQuery('.show').removeClass('show');
                            nextElem.addClass('show');
                        }
                    }
                    else
                    {
//                        
                        if (lastSelectedIndex >= totalItems)
                            lastSelectedIndex = 0;


                        if (lastSelectedIndex <= 1) {
                            jQuery('.show').removeClass('show');
//                            jQuery('.partner-blk:lt(-3)').addClass('show');
                            lastSelectedIndex = totalItems;
                        }

                        {
                            lastSelectedIndex = lastSelectedIndex - 1;
                            nextElem = jQuery('.partner-blk').slice(lastSelectedIndex, lastSelectedIndex + 1);

                            jQuery('.show').removeClass('show');
                            nextElem.addClass('show');
                        }
                    }
                }
                next();

            </script>
            <style>
                .show{
                    display: inline-block;
                }
            </style>
        </div>
        <!-- Portfolio item slider start -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h1 class="another-title"><i class="fa fa-dot-circle-o"></i> Another Services</h1>
            <div class="panel-group" id="accordion">

                <?php foreach ($this->db->where('service_id !=', $item->service_id)->get('services')->result() as $service): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#<?php echo $service->service_id ?>">  <?php echo substr($service->title, 0, 18) ?> </a> </h4>
                        </div>
                        <div id="<?php echo $service->service_id ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                   
                                    <?php $this->load->helper('text') ?>
                                    <?php echo word_limiter($service->description, 30) ?> 
                                    <br>
                                    <a href="<?php echo site_url('service/index/' . $service->service_id) ?>"><i class="fa fa-eye"></i> Read more</a>
                                </p>                                    
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>

    </div>

</div><!-- Toggle start -->

<!-- Latest News
============================================================== --> 

