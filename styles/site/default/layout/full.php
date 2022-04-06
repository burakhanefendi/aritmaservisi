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
        <script src="https://kit.fontawesome.com/b2f67f3131.js" crossorigin="anonymous"></script>

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
        <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57903d7527e22f44"></script>

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

                                    <li><a href="<?php echo config('instagram') ?>" target="_blank" class="inst"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php echo config('youtube') ?>" target="_blank" class="yotube"><i class="fa fa-youtube-play"></i></a></li>
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
                            <a href="<?php echo site_url() ?>" class="logo"><img src="/styles/site/default/assets/images/su-aritma-logo.png" alt="<?php echo config('title') ?> " title="<?php echo config('title') ?>" ></a>
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
                                        <a href="<?php echo site_url() ?>">Anasayfa</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('aboutus') ?>">Hakkımızda </a>
                                    </li>
                                    <li>
                                        <a href="#"> Hizmetlerimiz <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li>
                                                <a href="/post/index/8"> Su Arıtma Servisi</a>
                                            </li>
                                            <li>
                                                <a href="/post/index/7"> Su Arıtma Cihazı Periyodik Bakım</a>
                                            </li>


                                        </ul>
                                    </li>
<!--                                    <li>-->
<!--                                        <a href="--><?php //echo site_url('projects') ?><!--">Portfolio </a>-->
<!--                                    </li>-->
                                    <li>
                                        <a href="<?php echo site_url('news') ?>">Blog </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('faqs') ?>">Sıkça Sorulan Sorular </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('home/contactus') ?>">İletişim</a>
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

                                        <?php if ($categories): ?>
                                            <?php foreach ($categories as $row): ?>
                                                <li>
                                                    <a href="#"> <?php echo $row->title ?></a> <i class="drop-ul fa fa-caret-down"></i>
                                                    <ul>
                                                        <?php $services = $this->db->where('category_id', $row->category_id)->get('services')->result(); ?>
                                                        <?php if ($services): ?>
                                                            <?php foreach ($services as $row_): ?>
                                                                <li>
                                                                    <a href="<?php echo site_url('service/index/' . $row_->service_id) ?>"><?php echo $row_->title ?></a>

                                                                </li>
                                                            <?php endforeach ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                </li>
                                            <?php endforeach ?>
                                        <?php endif; ?>

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
<!--        <div class="newsletters-content">-->
<!--            <div class="container">-->
<!--                <div class="col-md-7">-->
<!--                    <img src="--><?php //echo STYLE_IMAGES ?><!--/newsletter-icon.png" alt="Newletter" />-->
<!--                </div>-->
<!--                <div class="col-sm-5">-->
<!--                    <h3>Newsletter</h3>-->
<!--                    <p>Subscribe To get latest news and offers</p>-->
<!--                    <form class="subscrie-form" id="newsletter" method="post">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-12"><div id="newsletter-sucess"></div></div>-->
<!--                            <div class="col-md-12"><div id="newsletter-fail"></div></div>-->
<!--                        </div>-->
<!--                        <input class="newsletter" type="email" name="email" required="required"  id="email" placeholder="Your email address here..."/>-->
<!--                        <button class="newsletter-btn" type="submit"><img class="loading-news" src="--><?php //echo STYLE_IMAGES ?><!--/loading.gif" /> Subscribe </button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- Footer
        ============================================================== -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <p>
                                    <img src="<?php echo config('logo') ?>" style="display:block; height: 25px; margin-bottom: 7px;">

                                    <a href="<?php echo site_url('aboutus') ?>"> 
                                        <?php echo config('description') ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget-head">Hizmetlerimiz</h3>
                                <ul>
                                    <?php if ($categories): ?>
                                        <?php foreach ($categories as $row): ?>
                                            <li>
                                                <a> <?php echo $row->title ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget-head">Son Yazılar</h3>
                                <ul>
                                    <?php $posts = $this->db->limit('6')->get('blog')->result(); ?>
                                    <?php if ($posts): ?>
                                        <?php foreach ($posts as $row): ?>
                                            <li>
                                                <a href="<?php echo site_url('post/index/' . $row->blog_id) ?>">  <?php echo substr($row->title, 0, 28) ?> ..</a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget footer-contact">
                                <h3 class="footer-widget-head"> İletişim Bilgilerimiz</h3>
                                <ul>
                                    <li> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo config('webmaster_email') ?>"><?php echo config('webmaster_email') ?> </a>  </li>
                                    <li> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo config('phone') ?>   </li>
                                    <li> <i class="fa fa-whatsapp" aria-hidden="true"></i> <?php echo config('whatsapp') ?> </li>
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
                                <li><a href="<?php echo site_url('aboutus') ?>">Hakkımızda</a></li>
                                <li><a href="<?php echo site_url('news') ?>"> Blog</a></li>
                                <li><a href="<?php echo site_url('home/contactus') ?>"> İletişim</a></li>
<!--                                --><?php //foreach ($this->db->get('pages')->result() as $row): ?>
<!--                                    <li><a href="--><?php //echo site_url('page/' . $row->page_id . '-' . permalink($row->title)) ?><!--"> --><?php //echo $row->title ?><!--</a></li>-->
<!--                                --><?php //endforeach ?>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright-text">
                                Powered by <i style="color: red;" class="fa fa-heart"></i> <a href="#">Efendi</a>
                                <?php echo config('copyright') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <a href="https://wa.me/905053184966">
            <div class="pulse uk-margin-auto uk-text-center" style=""><i style="font-size: 55px" class="fa-brands fa-whatsapp"></i></div>
        </a>

        <a href="tel://+905053184966">
            <div style="left: 20% !important; background: #db5f32 !important; border-color: #db5f32 !important; " class="pulse pulseLeft uk-margin-auto uk-text-center"><i style="font-size: 35px;margin-top: 10px;" class="fa-solid fa-phone"></i></div>
        </a>




        <p id="back-top">
            <a href="#top" title="Back to Top"><i class="fa fa-chevron-up"></i></a>
        </p>
        <script>
            //NEWSLETTER FUNCTION
            jQuery(document).ready(function ($) {
                $('#newsletter').submit(function (e) {
                    var form = $(this);
                    e.preventDefault();
                    $(".loading-news").show();
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('home/newsletters'); ?>",
                        data: form.serialize(),
                        dataType: "html",
                        success: function (res) {
                            $('#newsletter-sucess').html(res);
                            $(".loading-news").hide();
                        }
                    });
                });
            });
        </script>    
    </body>
</html>
