<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Equipments
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a id="editable-sample_new" class="btn btn-shadow btn-primary" href="#equipment_add_modal" data-toggle="modal">
                                Add New
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>                
                    </div>                        
                    <table  class="display table table-bordered table-striped" id="equipment_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>                                
                                <th>Active Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($results as $result) {
                                ?>
                                <tr id="equipment_<?php echo $result->id; ?>">
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $result->name; ?></td>                                    

                                    <td align="center">
                                        <?php if ($result->is_published) { ?>
                                            <a class="btn btn-success btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 0, this)" title="click to deactivate equipment"><i class="fa fa-check"></i></a>
                                        <?php } else { ?>
                                            <a class="btn btn-warning btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 1, this)" title="click to activate equipment"><i class="fa fa-exclamation-circle"></i></a>
                                        <?php } ?>
                                    </td>

                                    <td align="center">
                                        <a class="btn btn-primary btn-xs" onclick="display_edit_equipment_pop_up(<?php echo $result->id; ?>)"><i class="fa fa-pencil"  data-original-title="Update"></i></a>                                        
                                        <a class="btn btn-danger btn-xs" onclick="delete_equipment(<?php echo $result->id; ?>)"><i class="fa fa-trash-o " title="" data-original-title="Remove"></i></a>
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


<!--Equipment Add Modal -->
<div class="modal fade " id="equipment_add_modal" tabindex="-1" role="dialog" aria-labelledby="equipment_add_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Equipment</h4>
            </div>

            <form id="equipment_add_form" name="equipment_add_form">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Title</label>
                        <input id="name" name="name" class="form-control" type="text" placeholder="Enter Title">
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
<!-- modal -->

<!--Equipment Edit Modal -->
<div  id="equipment_edit_div" >
    <div class="modal-dialog">
        <div class="modal-content" id="equipment_edit_content">

        </div>
    </div>
</div>

<script type="text/javascript">

    $('#vehicle_spec_menu').addClass('active open');

    $(document).ready(function () {

        $('#equipment_table').dataTable();

        $("#equipment_add_form").validate({
            rules: {
                name: "required"
            },
            messages: {
                name: "Please enter a title"
            }, submitHandler: function (form)
            {
                $.post(site_url + '/equipment/add_new_equipment', $('#equipment_add_form').serialize(), function (msg)
                {
                    if (msg == 1) {
                        equipment_add_form.reset();
                        window.location = site_url + '/equipment/manage_equipment';
                    } else {
                        alert("error occured");
                    }
                });
            }
        });
    });


    function delete_equipment(id) {

        if (confirm('Are you sure want to delete this Equipment ?')) {

            $.ajax({
                type: "POST",
                url: site_url + '/equipment/delete_equipment',
                data: "id=" + id,
                success: function (msg) {
                    if (msg == 1) {
                        $("#equipment_" + id).hide();
                    } else if (msg == 2) {
                        alert('Cannot be deleted!');
                    }
                }
            });
        }
    }


    function change_publish_status(equipment_id, value, element) {

        var condition = 'Do you want to activate this equipment ?';
        if (value == 0) {
            condition = 'Do you want to deactivate this equipment ?';
        }

        if (confirm(condition)) {
            $.ajax({
                type: "POST",
                url: site_url + '/equipment/change_publish_status',
                data: "id=" + equipment_id + "&value=" + value,
                success: function (msg) {
                    if (msg == 1) {
                        if (value == 1) {
                            $(element).parent().html('<a class="btn btn-success btn-xs" onclick="change_publish_status(' + equipment_id + ',0,this)" title="click to deactivate equipment"><i class="fa fa-check"></i></a>');
                        } else {
                            $(element).parent().html('<a class="btn btn-warning btn-xs" onclick="change_publish_status(' + equipment_id + ',1,this)" title="click to activate equipment"><i class="fa fa-exclamation-circle"></i></a>');
                        }

                    } else if (msg == 2) {
                        alert('Error !!');
                    }
                }
            });
        }
    }

    function display_edit_equipment_pop_up(equipment_id) {

        $.post(site_url + '/equipment/load_edit_equipment_content', {equipment_id: equipment_id}, function (msg) {

            $('#equipment_edit_content').html('');
            $('#equipment_edit_content').html(msg);

        });

        $("#equipment_edit_div").dialog({
            autoOpen: false,
            title: "Equipment Quick Edit",
            modal: true,
            width: "650"

        });
        $("#equipment_edit_div").dialog("option", {modal: true}).dialog("open");
    }
</script>

