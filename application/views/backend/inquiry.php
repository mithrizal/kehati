<div class="container-fluid">
    <!-- Begin page heading -->
    <h1 class="page-heading"><?php echo $page_header; ?>&nbsp;&nbsp;<small><?php echo $page_desc; ?></small></h1>
    <!-- End page heading -->

    <!-- Begin breadcrumb -->
    <!--    <ol class="breadcrumb default square rsaquo sm">
            <li><a href="<?php echo base_url("backend/dashboard"); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php echo base_url("backend/subscriber"); ?>"><?php echo $page_header; ?></a></li>
            <li class="active">Main Data</li>
        </ol>-->
    <?php if ($message_sys != "") { ?>
        <div class="alert alert-<?php echo $class; ?> alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $message_sys; ?>
        </div>
    <?php } ?>
    <!-- End breadcrumb -->

    <!-- BEGIN DATA TABLE -->
    <div class="the-box no-margin">
        <div class="row">
            <div class="col-sm-12">
                <div class="the-box full no-border">
                    <form role="form">
                        <div class="form-group has-feedback no-label">
                            <input type="text" class="form-control" placeholder="Search mail...">
                            <span class="fa fa-search form-control-feedback"></span>
                        </div>
                    </form>
                </div>
                <table class="table table-hover" >
                    <thead class="the-box dark full">
                        <tr class="table-header-kehati">
                            <th>Done</th>
                            <th>Full Name</th>
                            <th>Subject</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>                
                        <?php
                        $no = 0;
                        foreach ($inquiries as $s) {
                            $no++;
                            $fu = 'fa-bookmark text-warning';
                            if($s->Follow_up) $fu = 'fa-bookmark-o';
                            ?>    
                            <tr class='clickable-row' data-href='<?php echo base_url("backend/inquiry/read/" . $s->Id); ?>'>
                                <td align="center"><span class="favorite fa <?php echo $fu; ?>"></span></td>
                                <td style="max-width: 30ch;" class="overflow ellipsis"><span class="span-name"><?php echo $s->Name; ?></span></td>
                                <td style="max-width: 88ch;" class="overflow ellipsis">
                                    <span class="span-subject"><?php echo $s->Subject; ?></span>
                                    <span class="span-message">-&nbsp;<?php echo $s->Message; ?></span>
                                </td>
                                <td align="right" style="max-width: 250px;" class="overflow ellipsis"><span class="span-time"><?php echo $s->Inquiry_date; ?></span></td>
    <!--                                <td align="center">
                                    <a class="btn btn-outline btn-circle btn-danger" data-target="#delete"
                                       role="button" data-toggle="modal" title="Delete Data"
                                       onclick="$('input[name=deleted_id]').val(<?php echo $s->Id; ?>)">
                                        <i class="fa fa-times"></i></a>
                                </td>-->
                            </tr>
                        <?php } ?>  
                    </tbody>
                </table>
                <div class="list-group success square no-side-border">

                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.the-box -->
    <!-- END DATA TABLE -->
</div><!-- /.container-fluid -->


<script type="text/javascript">

    function br2nl(str) {
        return str.replace(/<br\s*\/?>/mg, "\n");
    }

    $(document).ready(function () {
        $(".clickable-row").click(function () {
            window.location = $(this).data('href');
            return false;
        });

        $('#dataTables-subscriber').dataTable({
            "order": [[1, "desc"]],
            "columns": [
                null,
                null,
                {"orderable": false}
            ]
        });
    });
</script>
