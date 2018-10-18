<!DOCTYPE html>
<html lang="en">
    <head>
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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png'); ?>">                
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css'); ?>">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/hamburgers.min.css'); ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css//animsition.min.css'); ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2.min.css'); ?>">
        <!--===============================================================================================-->
        <!-- Theme style  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
        <!--===============================================================================================-->
        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>        
        <!-- Bootstrap -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>        

    </head>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url('<?php echo base_url('assets/images/bg-01.jpg'); ?>');">
                <div class="wrap-login100">
                    <?php
                    $attributes = array(
                        'method' => "post",
                        'id' => 'cussahh',
                        'name' => 'cussahh',
                        'class' => 'login100-form validate-form');
                    echo form_open('security/bismillah', $attributes);
                    ?>
                    <div class="hidden-xs">
                        <span class="login100-form-logo">
                            <!--<i class="zmdi zmdi-landscape"></i>-->
                            <a class="gtco-logo" href="<?php echo base_url() ?>">KEHATI</a>
                        </span>

                        <span class="login100-form-title p-b-34 p-t-27">
                            Log in
                        </span>
                    </div>
                    <div class="visible-xs">
                        <span class="login100-form-title p-b-34">
                            Log in Kehati
                        </span>
                    </div>
                    <?php if (isset($message_sys)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message_sys; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input id="kht-username" class="input100" type="text" name="kht-username" placeholder="Username" required maxlength="50">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input id="kht-password" class="input100" type="password" name="kht-password" placeholder="Password" required maxlength="50" >
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-50">
                        <a class="txt1" href="#">
                            Forgot Password?
                        </a>
                    </div>
                    <?php echo form_close(); ?>	
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 6000);
        </script>

        <div id="dropDownSelect1"></div>
    </body>
</html>