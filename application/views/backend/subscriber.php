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
    <div class="the-box">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="dataTables-subscriber" data-page-length='25'>
                <thead class="the-box dark full">
                    <tr class="table-header-kehati">
                        <th>Subscriber Mail</th>
                        <th>Join Date</th>
                        <th class="col-lg-2" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($subscribers as $s) {
                        $no++;
                        ?>    
                        <tr>
                            <td><?php echo $s->Email; ?></td>
                            <td class="center"><?php echo $s->Join_date; ?></td>
                            <td  align="center">
                                <a class="btn btn-outline btn-circle btn-danger" data-target="#delete"
                                   role="button" data-toggle="modal" title="Delete Data"
                                   onclick="$('input[name=deleted_id]').val(<?php echo $s->Id; ?>)">
                                    <i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>     
                </tbody>
            </table>
        </div><!-- /.table-responsive -->
        <!-- Modal -->        
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="cmxform" action="<?php echo base_url('backend/subscriber/delete'); ?>" method="post" id="form_delete">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete <?php echo $page_header; ?></h4>
                        </div>
                        <div class="modal-body">
                            <p class="error-text"><?php echo $this->lang->line('MESSAGE_DELETE_CONFIRM'); ?></p>                                
                            <input type="hidden" name="deleted_id" value="">                                
                        </div>
                        <div class="modal-footer">
                            <button class="btn" type="button" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button class="btn btn-danger">Delete</button>                     
                        </div>
                    </div><!-- /.modal-content -->
                </form> 
            </div><!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div><!-- /.the-box .default -->
    <!-- END DATA TABLE -->
</div><!-- /.container-fluid -->


<script type="text/javascript">

    function br2nl(str) {
        return str.replace(/<br\s*\/?>/mg, "\n");
    }

    $(document).ready(function () {
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
