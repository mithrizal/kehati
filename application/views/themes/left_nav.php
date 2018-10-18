
<!-- BEGIN SIDEBAR LEFT -->
<div class="sidebar-left sidebar-nicescroller">
    <ul class="sidebar-menu">
        <li>
            <a href="<?php echo base_url("backend/dashboard"); ?>">
                <i class="fa fa-dashboard icon-sidebar"></i>
                Dashboard
                <span class="label label-success span-sidebar">UPDATED</span>
            </a>
        </li>
        <li class="static">DATA FRONTEND</li>
        <li>
            <a href="<?php echo base_url("backend/collections"); ?>">
                <i class="fa fa-th-large icon-sidebar"></i>
                Collections
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("backend/store"); ?>">
                <i class="fa fa-home icon-sidebar"></i>
                Shops
            </a>
        </li>
        <li class="static">DATA INPUT</li>
        <li>
            <a href="<?php echo base_url("backend/mail"); ?>">
                <i class="fa fa-envelope-o icon-sidebar"></i>
                Info Inbox's
                <span class="badge badge-info span-sidebar">23</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("backend/subscriber"); ?>">
                <i class="fa fa-thumb-tack icon-sidebar"></i>
                Subscribers
                <span class="badge badge-info span-sidebar"><?php echo $newSubscriberTotal; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("backend/inquiry"); ?>">
                <i class="fa fa-question-circle icon-sidebar"></i>
                Inquiries
                <span class="badge badge-info span-sidebar"><?php echo $unfollowInquiries; ?></span>
            </a>
        </li>
        <li class="static">DATA SETTING</li>
        
    </ul>
</div><!-- /.sidebar-left -->
<!-- END SIDEBAR LEFT -->