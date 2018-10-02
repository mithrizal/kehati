<!DOCTYPE HTML>
<html lang="id">

    <head>
        <!--        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Shop boots, shoes kids on the official voltshoes online store. Create and personalize custom boots and boat shoes." name="description">
        <meta content="kids shoes, kids, kid shoes, shoe stores, buy boots, buy shoes, shop for shoes, shop for boots, voltshoes, winter boots, boot company, kids boots, custom shoes, volt, voltshoes" name="keywords">
        <meta name="author" content="voltshoes">
        <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
        <meta content="no" http-equiv="imagetoolbar">
        <meta content="Voltshoes" property="og:site_name">
        <meta content="http://www.voltshoes.com" property="og:url">
        <meta content="http://www.voltshoes.com/images/voltshoes_logo.jpg" property="og:image">
        <meta content="website" property="og:type">

        <title>Voltshoes - Admin Page.</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.jpg'); ?>">        

        <!-- Core Scripts - Include with every page -->        
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.1.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/metisMenu/jquery.metisMenu.js'); ?>"></script>        
        <script type="text/javascript" src="<?php echo base_url('assets/js/sb-admin.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/modal.js'); ?>"></script>        
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.file-input.js'); ?>"></script>        
        <!--<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.datepicker.validation.js'); ?>"></script>-->        
        
        <!-- Core CSS - Include with every page -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb-admin.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables/dataTables.bootstrap.css'); ?>">        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datepicker.css'); ?>">        
        
        <!-- jQuery Validation -->        
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>
        <!--<script type="text/javascript" src="<?php echo base_url('assets/js/additional-methods.js'); ?>"></script>-->
        
        <!-- CSS Backend Additional -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/backend_style.css'); ?>">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <div class="header-logo">
                        <a class="image-logo" href="<?php echo base_url() ?>">www.voltshoes.com</a>
                    </div>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 1 New Message
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="<?php echo base_url("backend/profile"); ?>">
                                    <i class="fa fa-user fa-fw"></i> User Profile
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("backend/setting"); ?>">
                                    <i class="fa fa-gear fa-fw"></i> Settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url("security/logout"); ?>">
                                    <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default navbar-static-side" role="navigation">
                    <?php $this->load->view("backend/side_menu.php"); ?>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <?php $this->load->view($content_view); ?>                
            </div>
            <!-- /#page-wrapper -->
        </div>
    </body>
</html>