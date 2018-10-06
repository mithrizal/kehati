<!DOCTYPE html>

<div id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="row design row-mt-4em">
        <img src="<?php echo base_url('assets/images/home_desktop.jpg'); ?>" class="hidden-xs" style="width: 100%">
        <img src="<?php echo base_url('assets/images/home_mobile.jpg'); ?>" class="visible-xs" style="width: 100%">
        <div class="about-content-text text-center" data-animate-effect="fadeInUp">
            <p class="quote">"<?php echo $quote; ?>"</p>
            <img width="150px" src="<?php echo base_url('assets/images/about_signature.png'); ?>"> 
        </div> 
    </div>
</div>
<div class="flex-section gtco-gray-bg">
    <div class="row-gallery">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main-title">
                        <!--<i class="icon-instagram insta-icon hidden-xs"></i>-->
                        <h2 class="insta-feed">Latest Gallery</h2>
                    <!--</a>-->
                </div>
            </div>
        </div>
        <!-- InstaWidget -->
<!--        <div class="text-center">
            <a href="https://instawidget.net/v/user/Kehati.shoes" id="link-1b70042141e1b54c5bd9a1b4e965dba26bec1c52f47c73f06946b0ede0cbe2b8">@Kehati.shoes</a>
            <script src="https://instawidget.net/js/instawidget.js?u=1b70042141e1b54c5bd9a1b4e965dba26bec1c52f47c73f06946b0ede0cbe2b8&width=1500px"></script>
        </div>        
         SnapWidget 
        <div class="text-center">
            <script src="https://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="https://snapwidget.com/embed/606637" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
        </div>
         elfsight 
        <div class="text-center">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-be11759d-2012-45cf-aaed-3b7d226e3c13"></div>
        </div>-->
        <!-- GrahamSnaps Widget Embed -->
        <div class="text-center">
            <!-- GrahamSnaps Widget Embed -->
            <div id="gs-grid" class="gs-wLPtUFxd1Jgo9Q"></div>
            <script>(function(a,b,c,d,e){if(!(e in a)){a.gs=function(){a.gs.q.push(arguments);};a.gs.q=[];}var f=b.createElement(c);f.src=d;f.async=!0;var g=b.getElementsByTagName(c)[0];g.parentNode.insertBefore(f,g);})(window,document,"script","https://cdn.grahamsnaps.com/js/grid.js","gs");gs("Grid", "wLPtUFxd1Jgo9Q");</script>
<!--            <div id="gs-grid" class="gs-f5faA9K5i0Yklg"></div>
            <script>(function(a,b,c,d,e){if(!(e in a)){a.gs=function(){a.gs.q.push(arguments);};a.gs.q=[];}var f=b.createElement(c);f.src=d;f.async=!0;var g=b.getElementsByTagName(c)[0];g.parentNode.insertBefore(f,g);})(window,document,"script","https://cdn.grahamsnaps.com/js/grid.js","gs");gs("Grid", "f5faA9K5i0Yklg");</script>-->
        </div>
<!--        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <a target="_blank" href="https://www.instagram.com/kehati.shoes/">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n4.jpg'); ?>" alt="Card image cap">                
            </a>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <a target="_blank" href="https://www.instagram.com/kehati.shoes/">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n5.jpg'); ?>" alt="Card image cap">               
            </a>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <a target="_blank" href="https://www.instagram.com/kehati.shoes/">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n6.jpg'); ?>" alt="Card image cap">
            </a>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <a target="_blank" href="https://www.instagram.com/kehati.shoes/">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n7.jpg'); ?>" alt="Card image cap">                
            </a>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <a target="_blank" href="https://www.instagram.com/kehati.shoes/">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n8.jpg'); ?>" alt="Card image cap">
            </a>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <a target="_blank" href="https://www.instagram.com/kehati.shoes/">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n9.jpg'); ?>" alt="Card image cap">                
            </a>
        </div>        -->
    </div>
</div>
<!--<div class="col-2 flex-img" style="background-image: url('<?php echo base_url('assets/images/img_bg_2.jpg'); ?>);'"></div>-->
<div class="flex-section reverse">
    <div class="overlay"></div>
    <div class="row design">
        <img src="<?php echo base_url('assets/images/collection_home_desktop.jpg'); ?>" class="hidden-xs" style="width: 100%">
        <img src="<?php echo base_url('assets/images/collection_home_mobile.jpg'); ?>" class="visible-xs" style="width: 100%">
        <div class="hero-text text-center">
            <h2 class="collection-title">Spring / Summer 2019</h2>
            <a class="btn" href="<?php echo base_url("home/collections"); ?>">See The Collection</a>
        </div> 
    </div>
</div>

<div class="flex-section gtco-gray-bg" style="padding: 1px;">
    <!--<div class="gtco-container">-->
    <div class="row">
        <?php
        $no = 0;
        foreach ($products as $product) {
        ?>    
        <div class="store-item col-md-3 col-sm-3 col-xs-6">
            <a href="<?php echo base_url("home/collections/" . strtolower(str_replace(array(' ', '/'), array('-', '-'), $product->Category)) . "/" . strtolower($product->Code)); ?>" 
               class="gtco-card-item" title="<?php echo $product->Name; ?>" alt="<?php echo $product->Name; ?>">
                <figure>
                    <div class="overlay"></div>
                    <div>
                        <img src="<?php echo base_url('assets/data/product/'.$product->Id.'.jpg'); ?>" alt="<?php echo $product->Code; ?>" class="img-responsive">
                        <div class="product-content"><?php echo $product->Name; ?></div>
                    </div>                    
                </figure>
            </a>
        </div>
        <?php } ?>             
        <div class="clearfix visible-lg-block visible-md-block"></div>
    </div>
    <!--</div>-->
</div>
