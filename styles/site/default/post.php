<!-- Page Header
============================================================== --> 
<div class="page-head">
    <div class="container">
        <div class="page-head-wrap">
            <h1 class="page-head-title"><a href="<?php echo site_url() ?>"> Home</a> / <a href="<?php echo site_url('blog') ?>"> Blog</a> / <?php echo $item->title ?></h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- News Wrap
        ============================================================== --> 
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="news-wrap">
                <!-- Standard Post
                ================================= --> 
                <div class="news-blk">
                    <div class="news-head">
                        <div class="row">
                            <div class="col-sm-12 news-title-meta">
                                <h3 class="news-title"><?php echo $item->title ?></h3>
                                <span class="blog-date"><i class="fa fa-calendar"></i> <?php echo date('M d, Y h:i:s A', strtotime($item->datetime)) ?></span>
                            </div>
                            <div class="col-sm-12 pro-dtl-social">
                                <h6 class="share-btn"> share with:  </h6>
                                <div class="addthis_sharing_toolbox"></div>
                            </div>
                        </div>
                    </div>
                    <div class="news-img-vid">
                        <img style="width:100%;" src="<?php echo $item->image ?>" alt="">
                    </div>
                    <div class="news-text">
                        <?php foreach (explode("\n", $item->description) as $i): ?>
                            <p> <?php echo $i ?></p>
                        <?php endforeach; ?>
                    </div>

                    <?php if (config('disqus_username')): ?>
                        <div class="post-comment">
                            <h4>Leave Comment</h4>
                            <div id="disqus_thread"></div>
                            <script>
                                (function () {
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://<?php echo config('disqus_username') ?>.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <!-- Sidebar
        ============================================================== --> 
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="sidebar-widget-arr">
                <h3 class="sidebar-widget-title"><i class="fa fa-newspaper-o"></i> Another Posts</h3>
                <ul>
                    <?php foreach ($this->db->where('blog_id !=', $item->blog_id)->get('blog')->result() as $post): ?>
                        <li>
                            <a href="<?php echo site_url('post/index/' . $post->blog_id) ?>"> 

                                <?php echo substr($item->title, 0, 24) ?> ..
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>      
            <div class="ads-block">
                <?php echo ads(1) ?>
            </div>
        </div>
    </div>
</div>