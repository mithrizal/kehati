<!DOCTYPE html>

<div id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="row design row-mt-4em">
        <img src="<?php echo base_url('assets/images/collection_desktop.jpg'); ?>" class="hidden-xs" style="width: 100%">
        <img src="<?php echo base_url('assets/images/collection_mobile.jpg'); ?>" class="visible-xs" style="width: 100%">
        <div class="hero-text text-center">
            <h2 class="page-title"><?php echo $quote; ?></h2>
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

