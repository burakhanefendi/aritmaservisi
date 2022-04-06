<!-- Page Header
============================================================== --> 
<div class="page-head" style="margin-bottom: 0 !important;">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Anasayfa</a> / İletişim</h1>
        </div>
    </div>
</div>
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6015.93185104126!2d28.8623668767767!3d41.06973746717823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab1bfb80ca8dd%3A0x4aaea6261967f01c!2sTekstilkent!5e0!3m2!1str!2str!4v1649279984543!5m2!1str!2str" width="1920" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><div class="container">
    <div class="row">
        <!-- News Wrap
        ============================================================== --> 
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="news-wrap">

                <h4 class="pro-dtl-title">Bize Mesaj Gönderin</h4>
                <div class="contact-reply-wrap">
                    <form id="contactform" name="form1" method="post">
                        <div class="row">
                            <?php if ($success) : ?>
                                <div class="col-md-12">
                                    <div class="alert alert-success">
                                        <i class="fa fa-check-circle" aria-hidden="true" style="margin-left: 7px;"></i>  
                                        Mesajınız Başarılı Bir Şekilde Gönderilmiştir
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if (validation_errors()) : ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <i class="fa fa-times-circle" aria-hidden="true" style="margin-left: 7px;"></i> 
                                        <?php echo validation_errors() ?>
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label>Adınız</label>
                                <input type="text" name="name" />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label>Email</label>
                                <input type="email" name="email" />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label>Telefon</label>
                                <input type="text" name="phone" />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Mesajınız</label>
                                <textarea cols="10" rows="5" name="message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" id="send" value="Gönder" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>

        <!-- Sidebar
        ============================================================== --> 
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="sidebar-widget-arr">
                <h3 class="sidebar-widget-title">İletişim Bilgilerimiz</h3>
                <div class="phone-blk font-num">
                    <?php echo config('phone') ?> 
                </div>
                <div class="whats-blk font-num">
                    <?php echo config('whatsapp') ?> 
                </div>
                <div class="email-blk">
                    <a href="mailto: <?php echo config('webmaster_email') ?> "> <?php echo config('webmaster_email') ?> </a> <br>
                </div>

                <div class="address-blk">
                    <?php echo config('address') ?>
                </div>
            </div>
        </div>
    </div>
</div>

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

