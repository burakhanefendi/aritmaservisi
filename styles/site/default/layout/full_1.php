<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo config('title') ?></title>
        <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
        <meta name="description" content="<?php echo config('meta_description') ?>">
        <meta name="Keywords" content="<?php echo config('meta_keywords') ?>">
        <link rel="shortcut icon" href="<?php echo config('favicon') ?>" type="image/x-icon" />
        <!-- CSS -->
        <link href="<?php echo STYLE_CSS ?>/style.css" rel="stylesheet">

        <!-- fontAwesome Icon's -->
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/font-awesome.css" type="text/css">

        <!-- JavaScript
        ================================================== -->
        <script src="<?php echo STYLE_JS ?>/jquery.js"></script>
        <script src="<?php echo STYLE_JS ?>/bootstrap.js"></script>
        <script src="<?php echo STYLE_JS ?>/superfish.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.flexslider-min.js"></script>
        <script src="<?php echo STYLE_JS ?>/owl.carousel.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.mixitup.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.fancybox.pack.js"></script>
        <script src="<?php echo STYLE_JS ?>/main.js"></script>

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57903d7527e22f44"></script>
    </head>
    <body>
        <!-- Header
        ============================================================== -->
        <header>
            <!-- Topbar
            ============================================================== -->
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="topbar-social">
                                <ul>
                                    <li><a href="<?php echo config('facebook') ?>" target="_blank" class="fb"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo config('twitter') ?>" target="_blank" class="tw"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo config('linkedin') ?>" target="_blank" class="link"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo config('instagram') ?>" target="_blank" class="inst"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php echo config('youtube') ?>" target="_blank" class="yotube"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="<?php echo config('google_plus') ?>" target="_blank" class="gle"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>

                            <div class="topbar-email">
                                <a class="font-num" href="mailto:<?php echo config('webmaster_email') ?>"> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo config('webmaster_email') ?></a>
                            </div>

                            <div class="topbar-phone font-num">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>                
                                <?php echo config('phone') ?> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo, Menu
            ============================================================== -->
            <div class="container clearfix">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-cont">
                            <a href="<?php echo site_url() ?>" class="logo"><img src="<?php echo config('logo') ?>" alt="<?php echo config('title') ?> " title="<?php echo config('title') ?>" ></a>
                        </div>

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="menu-login-cont">
                            <nav id="header-menu-cont">
                                <ul class="sf-menu" id="top-menu">
                                    <li>
                                        <a href="<?php echo site_url() ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('aboutus') ?>">About Us </a>
                                    </li>
                                    <li>
                                        <a href="#"> Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <?php foreach ($this->db->get('categories')->result() as $row): ?>
                                                <li>
                                                    <a href="#"> <?php echo $row->title ?></a>
                                                    <ul>
                                                        <?php foreach ($this->db->where('category_id', $row->category_id)->get('services')->result() as $row_): ?>
                                                            <li>
                                                                <a href="<?php echo site_url('service/index/' . $row_->service_id) ?>">  <?php echo $row_->title ?> </a>

                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </li>
                                            <?php endforeach ?>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('projects') ?>">Portfolio </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('news') ?>">News </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('faqs') ?>">Faqs </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('home/contactus') ?>">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="res-menu" id="marwamenu">
                                <li><a href="<?php echo site_url() ?>">Home</a></li>
                                <li> <a href="<?php echo site_url('aboutus') ?>">About Us </a></li>
                                <li>
                                    <a href="#"> Services</a> <i class="drop-ul fa fa-caret-down"></i>
                                    <ul>
                                        <?php foreach ($this->db->get('categories')->result() as $row): ?>
                                            <li>
                                                <a href="#"> <?php echo $row->title ?></a> <i class="drop-ul fa fa-caret-down"></i>
                                                <ul>
                                                    <?php foreach ($this->db->where('category_id', $row->category_id)->get('services')->result() as $row_): ?>
                                                        <li>
                                                            <a href="<?php echo site_url('service/index/' . $row_->service_id) ?>"><?php echo $row_->title ?></a>

                                                        </li>
                                                    <?php endforeach ?>
                                                </ul>
                                            </li>
                                        <?php endforeach ?>

                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('projects') ?>">Portfolio </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('news') ?>">News </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('faqs') ?>">Faqs </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('home/contactus') ?>"> Contact Us</a>
                                </li>

                            </ul>

                        </div>

                    </div>
                </div>
            </div>

        </header>

        {layout}

        <!-- Footer
        ============================================================== -->
        <footer>
            <div class="footer-ads">
                <div class="container">
                    <?php echo ads(2) ?>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <p>
                                    <img src="<?php echo config('logo') ?>" style="display:block; height: 25px; margin-bottom: 7px;">

                                    <a href="<?php echo site_url('aboutus') ?>"> 
                                        <?php echo config('description') ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget-head">Our Services</h3>
                                <ul>
                                    <?php foreach ($this->db->get('categories')->result() as $row): ?>
                                        <li>
                                            <a> <?php echo $row->title ?></a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget-head">Recent Posts</h3>
                                <ul>
                                    <?php foreach ($this->db->limit('5')->get('blog')->result() as $row): ?>
                                        <li>
                                            <a href="<?php echo site_url('news/index/' . $row->blog_id) ?>">  <?php echo substr($row->title, 0, 28) ?> ..</a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget footer-contact">
                                <h3 class="footer-widget-head"> Contact Info</h3>
                                <ul>
                                    <li> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo config('webmaster_email') ?>"><?php echo config('webmaster_email') ?> </a>  </li>
                                    <li> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo config('phone') ?>   </li>
                                    <li> <i class="fa fa-whatsapp" aria-hidden="true"></i> <?php echo config('whatsapp') ?> </li>
                                    <li> <i class="fa fa-fax" aria-hidden="true"></i> <?php echo config('fax') ?>  </li>
                                    <li> <i class="fa fa-home" aria-hidden="true"></i> <?php echo config('address') ?>  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="footer-menu">
                                <li><a href="<?php echo site_url('aboutus') ?>">About us</a></li>
                                <li><a href="<?php echo site_url('projects') ?>"> Portfolio</a></li>
                                <li><a href="<?php echo site_url('news') ?>"> News</a></li>
                                <li><a href="<?php echo site_url('home/contactus') ?>"> Contact Us</a></li>
                                <?php foreach ($this->db->get('pages')->result() as $row): ?>
                                    <li><a href="<?php echo site_url('page/' . $row->page_id . '-' . permalink($row->title)) ?>"> <?php echo $row->title ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright-text">
                                <a href="http://marwa.elmanawy.info/"><?php echo config('copyright') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <p id="back-top">
            <a href="#top" title="Back to Top"><i class="fa fa-chevron-up"></i></a>
        </p>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-78106772-1', 'auto');
            ga('send', 'pageview');

        </script>

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-2178725799240442",
                enable_page_level_ads: true
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYxl2QJsaSSomJV4Q2didKjkY_Vm3eduw&language=en"></script>
        <script type="text/javascript">
            var locations = [
                ['<?php echo config('address') ?>', <?php echo config('longitude') ?>, <?php echo config('latitude') ?>]


            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: new google.maps.LatLng(<?php echo config('longitude') ?>, <?php echo config('latitude') ?>),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        </script>



        <!--Start Our Store-->
        <style>
            .footer-our-store{
                position: fixed;
                bottom: 40px;
                left: 20px;
                display: none;
            }

            .f_b_P{
                background-color: #000;
                height: 40px;
                position: relative;
                padding-left: 85px;
                display: block;
                padding-right: 50px;
                border-radius: 40px;
            }
            .f_b_P img {
                height: 80px;
                border-radius: 100%;
                position: absolute;
                left: -7px;
                top: -20px;
            }
            .f_b_P span{
                height: 40px;
                line-height: 40px;
                color: #fff;
            }
            .f_b_P i.close-ann {
                position: absolute;
                right: 15px;
                top: 14px;
                color: #fff;
                cursor: pointer;
            }
        </style>
        <div class="footer-our-store">
            <div class="f_b_P">
                <a href="http://elmanawy.info/marwa/store" target="_blank"><img src="<?php echo STYLE_IMAGES ?>/footer-store.jpg"></a> 
                <a href="http://elmanawy.info/marwa/store" target="_blank"><span>More Products </span></a><i class="fa fa-close close-ann"></i>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                if (!$.cookie('hideTopBar'))
                    $(".footer-our-store").show("slow");
                $(".close-ann").click(function () {
                    var date = new Date();
                    date.setTime(date.getTime() + (30 * 60 * 1000));
                    $.cookie('hideTopBar', 'true', {expires: date});
                    $(".footer-our-store").hide("slow");
                    return false;
                });
            });

        </script>
        <!--End Our Store-->
    </body>
</html>
