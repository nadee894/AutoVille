<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Body Types
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a id="editable-sample_new" class="btn btn-shadow btn-primary" href="#body_type_add_modal" data-toggle="modal">
                                Add New
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <table  class="display table table-bordered table-striped" id="body_type_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
<!--                                <th>Added By</th>
                                <th>Added Date</th>-->
                                <th>Active Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($results as $result) {
                                ?>
                                <tr id="body_type_<?php echo $result->id; ?>">
                                    <td><?php echo++$i; ?></td>
                                    <td><?php echo $result->name; ?></td>
<!--                                    <td><?php echo $result->added_by_user; ?></td>
                                    <td><?php echo $result->added_date; ?></td>-->
                                    <td align="center">
                                        <?php if ($result->is_published) { ?>
                                            <a class="btn btn-success btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 0, this)" title="click to deactivate transmission"><i class="fa fa-check"></i></a>
                                        <?php } else { ?>
                                            <a class="btn btn-warning btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 1, this)" title="click to activate transmission"><i class="fa fa-exclamation-circle"></i></a>
                                        <?php } ?>
                                    </td>
                                    <td align="center">
                                        <a href="<?php echo site_url(); ?>/Body_type/manage_body_types" class="btn btn-primary btn-xs"><i class="fa fa-pencil"  data-original-title="Update"></i></a>
                                        <a class="btn btn-danger btn-xs" onclick="delete_body_types(<?php echo $result->id; ?>)"><i class="fa fa-trash-o " title="" data-original-title="Remove"></i></a>

                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<!--Body Type add model-->
<div class="modal fade " id="body_type_add_modal" tabindex="-1" role="dialog" aria-labelledby="body_type_add_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Body Type</h4>
            </div>
            <form id="add_body_type_form" name="add_body_type_form">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Title</label>
                        <input id="name" class="form-control" name="name" type="text" placeholder="Enter Title">
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success" type="submit">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">

                                                $('#vehicle_spec_menu').addClass('active open');

                                                $(document).ready(function() {
                                                    $('#body_type_table').dataTable();

                                                    $("#add_body_type_form").validate({
                                                        rules: {
                                                            name: "required"
                                                        },
                                                        messages: {
                                                            name: "Please enter a title"
                                                        }, submitHandler: function(form)
                                                        {
                                                            $.post(site_url + '/body_type/add_body_type', $('#add_body_type_form').serialize(), function(msg)
                                                            {
                                                                if (msg == 1) {

                                                                    add_body_type_form.reset();
                                                                    window.location = site_url + '/body_type/manage_body_types';
                                                                } else {

                                                                }
                                                            });


                                                        }
                                                    });

                                                });

                                                //delete body types
                                                function delete_body_types(id) {

                                                    if (confirm('Are you sure want to delete this Body Type ?')) {

                                                        $.ajax({
                                                            type: "POST",
                                                            url: site_url + '/body_type/delete_body_types',
                                                            data: "id=" + id,
                                                            success: function(msg) {
                                                                //alert(msg);
                                                                if (msg == 1) {
                                                                    //document.getElementById(trid).style.display='none';
                                                                    $('#body_type_' + id).hide();
                                                                }
                                                                else if (msg == 2) {
                                                                    alert('Cannot be deleted as it is already assigned to others. !!');
                                                                }
                                                            }
                                                        });
                                                    }
                                                }


                                                //change publish status of body types
                                                function change_publish_status(body_type_id, value, element) {

                                                    var condition = 'Do you want to activate this body type ?';
                                                    if (value == 0) {
                                                        condition = 'Do you want to deactivate this body type?';
                                                    }

                                                    if (confirm(condition)) {
                                                        $.ajax({
                                                            type: "POST",
                                                            url: site_url + '/body_type/change_publish_status',
                                                            data: "id=" + body_type_id + "&value=" + value,
                                                            success: function(msg) {
                                                                if (msg == 1) {
                                                                    if (value == 1) {
                                                                        $(element).parent().html('<a class="btn btn-success btn-xs" onclick="change_publish_status(' + body_type_id + ',0,this)" title="click to deactivate body type"><i class="fa fa-check"></i></a>');
                                                                    } else {
                                                                        $(element).parent().html('<a class="btn btn-warning btn-xs" onclick="change_publish_status(' + body_type_id + ',1,this)" title="click to activate body type"><i class="fa fa-exclamation-circle"></i></a>');
                                                                    }

                                                                } else if (msg == 2) {
                                                                    alert('Error !!');
                                                                }
                                                            }
                                                        });
                                                    }
                                                }

</script>



