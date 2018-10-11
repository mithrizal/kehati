<!DOCTYPE html>

<div id="gtco-header" class="store gtco-cover gtco-cover-sm">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row row-homepage row-mt-7em">
            <div class="col-md-2 mt-text text-center animate-box" data-animate-effect="fadeInUp">
                &nbsp;
            </div>
            <div class="col-md-8 mt-text text-center animate-box" data-animate-effect="fadeInUp">
                <p class="white-title"><?php echo $quote; ?></p> 
                <p class="sub-quote-gray"><?php echo $sub_quote; ?></p> 
            </div>
            <div class="col-md-2 mt-text text-center animate-box" data-animate-effect="fadeInUp">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<div class="gtco-section gtco-gray-bg">
    <div class="gtco-container">
        <div class="row">
            <?php
            $no = 0;
            foreach ($stores as $store) {
                ?>    
                <div class="store-item col-lg-3 col-md-4 col-sm-4 col-xs-4">
                    <a target="_blank" href="<?php echo $store->Link; ?>" class="gtco-card-item">
                        <figure>
                            <div class="overlay"></div>
                            <img src="<?php echo base_url('assets/data/store/' . $store->Id . '.jpg'); ?>" alt="<?php echo $store->Name; ?>" class="img-responsive">
                        </figure>
                    </a>
                </div>
            <?php } ?>
            
            <div class="clearfix visible-lg-block visible-md-block"></div>
        </div>
    </div>
</div>
<!--<div id="gtco-subscribe">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-12 text-center">
                <p class="store-title"><?php echo $end_quote; ?></p>
            </div>
        </div>
    </div>
</div>-->