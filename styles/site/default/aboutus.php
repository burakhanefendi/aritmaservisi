<!-- Page Header
============================================================== --> 
<div class="page-head">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Home</a> / About us</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- News Wrap
        ============================================================== --> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="news-wrap">
                <!-- Standard Post
                ================================= --> 
                <?php foreach ($items as $item): ?>  
                    <div class="news-blk">
                        <div class="about-head">
                            <p>
                                <?php echo $item->about ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?> 
            </div>
        </div>

    </div>

    <div class="row about-team">
<!--        <h2>Our Lovely Team</h2>-->
        <?php foreach ($team as $item): ?> 
            <div class="col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="<?php echo $item->image ?>">
                    </div>
                    <div class="team-description">
                        <h3 class="team-name"><?php echo $item->name ?></h3>
                        <span class="team-position"><?php echo $item->position ?></span>
                        <p class="team-description"><?php echo $item->description ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?> 
    </div>
</div>

<div class="partner-home">
    <div class="container">
        <?php foreach ($partners as $item): ?>    
            <div class="col-md-2 col-sm-2" data-delay="100" style="visibility: visible;">
                <div class="partner-block">
                     <img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>">
                </div>
            </div><!--/ End first service -->
        <?php endforeach ?>
    </div>
</div><!--/ Partners row end -->