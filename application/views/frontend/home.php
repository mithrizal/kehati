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
                <div class="main-title text-center">
                    <!--<i class="icon-instagram" style="font-size: 45px;"></i>-->
                    <h1>INSTAGRAM FEED</h1>
                </div>
            </div>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <div class="single-news card">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n4.jpg'); ?>" alt="Card image cap">                
            </div>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <div class="single-news card">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n5.jpg'); ?>" alt="Card image cap">               
            </div>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <div class="single-news card">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n6.jpg'); ?>" alt="Card image cap">
            </div>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <div class="single-news card">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n7.jpg'); ?>" alt="Card image cap">                
            </div>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <div class="single-news card">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n8.jpg'); ?>" alt="Card image cap">
            </div>
        </div>
        <div class="gallery-item col-md-2 col-sm-2 col-xs-6">
            <div class="single-news card">
                <img class="img-responsive" src="<?php echo base_url('assets/data/gallery/n9.jpg'); ?>" alt="Card image cap">                
            </div>
        </div>
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
        <div class="store-item col-md-3 col-sm-3 col-xs-6">
            <a href="<?php echo base_url("home/collections/"); ?>" class="gtco-card-item">
                <figure>
                    <div class="overlay"></div>
                    <div>
                        <img src="<?php echo base_url('assets/data/product/kht-09.jpg'); ?>" alt="Image" class="img-responsive">
                        <div class="product-content">Olla</div>
                    </div>                    
                </figure>
            </a>
        </div>
        <div class="store-item col-md-3 col-sm-3 col-xs-6">
            <a href="<?php echo base_url("home/collections/"); ?>" class="gtco-card-item">
                <figure>
                    <div class="overlay"></div>
                    <div>
                        <img src="<?php echo base_url('assets/data/product/kht-10.jpg'); ?>" alt="Image" class="img-responsive">
                        <div class="product-content">Calia</div>
                    </div> 
                </figure>
            </a>
        </div>
        <div class="store-item col-md-3 col-sm-3 col-xs-6">
            <a href="<?php echo base_url("home/collections/"); ?>" class="gtco-card-item">
                <figure>
                    <div class="overlay"></div>
                    <div>
                        <img src="<?php echo base_url('assets/data/product/kht-08.jpg'); ?>" alt="Image" class="img-responsive">
                        <div class="product-content">Gatan</div>
                    </div> 
                </figure>
            </a>
        </div>
        <div class="store-item col-md-3 col-sm-3 col-xs-6">
            <a href="<?php echo base_url("home/collections/"); ?>" class="gtco-card-item">
                <figure>
                    <div class="overlay"></div>
                    <div>
                        <img src="<?php echo base_url('assets/data/product/kht-04.jpg'); ?>" alt="Image" class="img-responsive">
                        <div class="product-content">Daria</div>
                    </div> 
                </figure>
            </a>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
    </div>
    <!--</div>-->
</div>

<!--<div id="gtco-subscribe">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Keep In Touch</h2>
                <p>Subscribe to hear the latest news from Kehati Shoes.</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-inline">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email...">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-subscribe btn-block">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->
