<div class="page-title">

    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> Home</a>
            </li>

        </ol>

    </div>

</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Dashboard</h3>
        <div class="panel-options">
        </div>
    </div>
    <div class="panel-body">
        <div class="row">

            <div class="col-sm-3">

                <div class="xe-widget xe-progress-counter xe-progress-counter-pink" data-count=".num" data-from="0" data-to="<?php echo $users ?>" data-duration="2">

                    <div class="xe-background">
                        <i class="fa fa-user"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="xe-label">
                            <span>Admins</span>
                            <strong class="num"><?php echo $users ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="56" data-fill-unit="%" data-fill-property="width" data-fill-duration="2" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Admins</span>
                    </div>

                </div>


            </div>
         
           


            <div class="col-sm-3">

                <div class="xe-widget xe-progress-counter xe-progress-counter-primary"  data-count=".num" data-from="0" data-to="<?php echo $visitors ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-eye"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="xe-label">
                            <span> Views</span>
                            <strong class="num"><?php echo $visitors ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Views </span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">

                <div class="xe-widget xe-progress-counter xe-progress-counter xe-counter-block-orange"  data-count=".num" data-from="0" data-to="<?php echo $categories ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-sitemap"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-sitemap"></i>
                        </div>
                        <div class="xe-label">
                            <span> Categories</span>
                            <strong class="num"><?php echo $categories ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Categories </span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">

                <div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="<?php echo $services ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> Services</span>
                            <strong class="num"><?php echo $services ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Services </span>
                    </div>

                </div>
            </div>
            
            <div class="col-sm-3">

                <div class="xe-widget xe-progress-counter xe-counter-block-success"  data-count=".num" data-from="0" data-to="<?php echo $projects ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> Projects</span>
                            <strong class="num"><?php echo $projects ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Projects </span>
                    </div>

                </div>
            </div>
            
            <div class="col-sm-3">

                <div class="xe-widget xe-progress-counter xe-counter-block-purple"  data-count=".num" data-from="0" data-to="<?php echo $blog ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> Blog Posts</span>
                            <strong class="num"><?php echo $blog ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Posts </span>
                    </div>

                </div>
            </div>
            
            <div class="col-sm-3">

                <div class="xe-widget xe-progress-counter xe-counter-block-blue"  data-count=".num" data-from="0" data-to="<?php echo $testimonials ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> Testimonials</span>
                            <strong class="num"><?php echo $testimonials ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Testimonials </span>
                    </div>

                </div>
            </div>

        


        </div>

    </div>
</div>

<script src="<?php echo STYLE_JS ?>/widgets.js"></script>