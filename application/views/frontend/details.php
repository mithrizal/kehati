<!DOCTYPE html>
<div class="flex-section gtco-gray-bg">
    <div class="col-xs-2 clearfix detail-wrapper">
        <div class="widget-wrapper">
            <h1 class="wrapper">&nbsp</h1>            
            <div id="product" class="detail-content col-xs-12">
                <div class="col-xs-6 text-left">
                    <a class="mini-link" href="<?php echo base_url("home/collections"); ?>">&lt; BACK</a>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <a class="mini-link" href="<?php echo base_url("home/collections"); ?>">&lt;</a>&nbsp;
                    <a class="mini-link" href="<?php echo base_url("home/collections"); ?>">&gt;</a>
                </div>
                <div class="row"><div class="col-xs-12"><div class="top-divider"></div></div></div>
                <div>
                    <div class="col-sm-7 col-xs-12">
                        <img id="<?php echo $product->Code; ?>" class="product-images" src="<?php echo base_url('assets/data/product/'.$product->Id.'.jpg'); ?>" alt="<?php echo $product->Name; ?>"/>
                    </div>
                    <div class="col-sm-5 col-xs-12 col-product-detail">
                        <h1 class="product-title"><?php echo strtoupper($product->Name); ?></h1>
                        <p><?php echo $product->Description; ?></p>
                        <h3 class="product-sub"><span style="border-bottom: 1px solid #555555 !important;">DETAILS</span></h3>
                        <p class="product-detail">
                        <ul>
                            <?php if(isset($product->Detail_1)) { ?> <li><?php echo ucwords($product->Detail_1); ?></li> <?php } ?>
                            <?php if(isset($product->Detail_2)) { ?> <li><?php echo ucwords($product->Detail_2); ?></li> <?php } ?>
                            <?php if(isset($product->Detail_3)) { ?> <li><?php echo ucwords($product->Detail_3); ?></li> <?php } ?>
                            <?php if(isset($product->Detail_4)) { ?> <li><?php echo ucwords($product->Detail_4); ?></li> <?php } ?>
                            <li>SKU: <?php echo strtoupper($product->Code); ?></li>
                        </ul>
                        </p>
                        <h3 class="product-sub"><span style="border-bottom: 1px solid #555555 !important;">COLOUR</span></h3>
                        <p><?php echo ucwords($product->Color); ?></p>
                        <div>
                            <img src="<?php echo base_url('assets/images/size-chart.png'); ?>" alt="Size Chart"/>
                        </div>
                        <button id="btn-2">
                            <a href="<?php echo base_url("home/store"); ?>">Where To Buy</a>
                        </button>
<!--                        <button class="thebutton">
                            <img src="<?php echo base_url('assets/images/share.png'); ?>">
                        </button>-->
                        <div>
                            <ul class="gtco-social-icons">
                                <li><a class="product-social-a" target="_blank" href="#"><i class=" product-social icon-twitter"></i></a></li>
                                <li><a class="product-social-a" target="_blank" href="#"><i class=" product-social icon-facebook"></i></a></li>
                                <li><a class="product-social-a" target="_blank" href="#"><i class=" product-social icon-instagram"></i></a></li>
                                <li><a class="product-social-a" target="_blank" href="#"><i class=" product-social icon-pinterest"></i></a></li>
                                <li><a class="product-social-a" target="_blank" href="#"><i class=" product-social icon-mail2"></i></a></li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="flex-section gtco-gray-bg" style="padding: 1px;">
    <!--<div class="row">-->
    <div class="also-like col-xs-12">
        YOU MAY ALSO LIKE
    </div>
    <!--</div>-->
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
