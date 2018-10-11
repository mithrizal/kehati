<!DOCTYPE html>
<html lang="en">
    <head>
        <!--        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Shop boots, shoes kids on the official voltshoes online store. Create and personalize custom boots and boat shoes." name="description">
        <meta content="kids shoes, kids, kid shoes, shoe stores, buy boots, buy shoes, shop for shoes, shop for boots, voltshoes, winter boots, boot company, kids boots, custom shoes, volt, voltshoes" name="keywords">
        <meta name="author" content="kehati.studio">
        <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
        <meta content="no" http-equiv="imagetoolbar">
        <meta content="KEHATI" property="og:site_name">
        <meta content="http://www.kehati-shoes.com" property="og:url">
        <meta content="http://www.kehati-shoes.com/images/logo.jpg" property="og:image">
        <meta content="website" property="og:type">

        <title><?php echo $page_title; ?></title>

        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Animate.css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css'); ?>">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/icomoon.css'); ?>">
        <!-- Themify Icons-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themify-icons.css'); ?>">
        <!-- Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
        <!-- Magnific Popup -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
        <!-- Owl Carousel  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
        <!-- Theme style  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

        <!-- Modernizr JS -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js'); ?>"></script>        
        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>        
        <!-- Bootstrap -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>        
        <!-- Waypoints -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.waypoints.min.js'); ?>"></script>        
        <script type="text/javascript" src="<?php echo base_url('assets/js/sticky.js'); ?>"></script>        
        <!-- Carousel -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>        
        <!-- countTo -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.countTo.js'); ?>"></script>        
        <!-- Stellar Parallax -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.stellar.min.js'); ?>"></script>        
        <!-- Magnific Popup -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>        
        <script type="text/javascript" src="<?php echo base_url('assets/js/magnific-popup-options.js'); ?>"></script>        
        <!-- Main -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>        

    </head>
    <body>        
        <div class="gtco-loader"></div>
        <div id="page">
            <div class="page-inner">
                <header id="head-top" style="position: absolute; width: 100%; top: 0; ">
                    <nav class="gtco-nav sticky-banner" role="navigation">
                        <div class="gtco-container" style="max-width: 100%">
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <div id="gtco-logo"><a href="<?php echo base_url() ?>">KEHATI <em>.</em></a></div>
                                </div>
                                <div class="col-md-8 col-xs-10 text-center menu-1 header-menu">
                                    <ul>
                                        <li class="menu-item <?php echo $class_menu['home']; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li class="menu-item <?php echo $class_menu['collections']; ?>"><a href="<?php echo base_url("home/collections"); ?>">Collections</a></li>
                                        <li class="menu-item <?php echo $class_menu['brand']; ?>"><a href="<?php echo base_url("home/brand"); ?>">The Brand</a></li>
                                        <li class="menu-item <?php echo $class_menu['store']; ?>"><a href="<?php echo base_url("home/store"); ?>">Where To Buy</a></li>
                                        <li class="menu-item <?php echo $class_menu['contact']; ?>"><a href="<?php echo base_url("home/contact"); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

                <?php $this->load->view($content_view); ?>

                <div class="gototop js-top">
                    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
                </div>

            </div>
        </div>
    </body>
    <footer id="gtco-footer" role="contentinfo">
        <?php
        if(isset($subscribe_view)) {
            if ($subscribe_view) {
               $this->load->view("themes/subscribe.php");
           } else {
               $this->load->view("themes/quote.php");
           }   
        }
        ?>
        <div class="gtco-container" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="row" style="width: 100%">
                <div class="col-sm-3 col-xs-12">
                    <div class="gtco-widget">
                        <h3 class="footer-widget">Company</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="<?php echo base_url("home/contact"); ?>">Corporate Contact</a></li>
                            <li><a href="<?php echo base_url("home/terms"); ?>">Term &amp; Conditions</a></li>
                            <li><a href="<?php echo base_url("home/privacy_policy"); ?>">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="gtco-widget">
                        <h3 class="footer-widget">Follow Us</h3>
                        <ul class="gtco-social-icons pull-left">
                            <li><a target="_blank" href="https://twitter.com/kehatishoes/"><i class="icon-twitter-with-circle"></i></a></li>
                            <li><a target="_blank" href="#"><i class="icon-facebook-with-circle"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/kehati.shoes/"><i class="icon-instagram-with-circle"></i></a></li>
                            <li><a target="_blank" href="https://id.pinterest.com/kehatishoes/"><i class="icon-pinterest-with-circle"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="gtco-widget">
                        <h3 class="footer-widget">Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a target="_blank" href="#"><i class="icon-phone"></i> +62 877 4136 3273</a></li>
                            <li><a target="_blank" href="mailto:info@kehati-shoes.com"><i class="icon-mail2"></i> info@kehati-shoes.com</a></li>
                            <li><a target="_blank" href="#"><i class="icon-chat"></i> whatsapp  +62 877 4136 3273</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-12">
                <p class="text-center">
                    <small class="block"><a style="color: #F4DD0B;" href="<?php echo base_url() ?>">Kehati Shoes</a> &copy; 2018 - All Rights Reserved.</small> 
                </p>
            </div>
        </div>
    </footer>
</html>
