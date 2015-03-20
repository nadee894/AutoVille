<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Fuel Type
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a id="editable-sample_new" class="btn btn-shadow btn-primary" href="#fuel_type_add_modal" data-toggle="modal">
                                Add New
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <table  class="display table table-bordered table-striped" id="fuel_type_table">
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
                                <tr id="fuel_type_<?php echo $result->id; ?>">
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $result->name; ?></td>
    <!--                                    <td><?php echo $result->added_by_user; ?></td>
                                    <td><?php echo $result->added_date; ?></td>-->
                                    <td align="center">
                                        <?php if ($result->is_published) { ?>
                                            <a class="btn btn-success btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 0, this)" title="click to deactivate fuel type"><i class="fa fa-check"></i></a>
                                        <?php } else { ?>
                                            <a class="btn btn-warning btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 1, this)" title="click to activate fuel type"><i class="fa fa-exclamation-circle"></i></a>
                                        <?php } ?>
                                    </td>

                                    <td align="center">
                                        <a class="btn btn-primary btn-xs" onclick="display_edit_fuel_type_pop_up(<?php echo $result->id; ?>)"><i class="fa fa-pencil"  data-original-title="Update"></i></a>
                                        <a class="btn btn-danger btn-xs" onclick="delete_fuel_type(<?php echo $result->id; ?>)"><i class="fa fa-trash-o " title="" data-original-title="Remove"></i></a>

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


<!--Fuel Type Add Modal -->
<div class="modal fade " id="fuel_type_add_modal" tabindex="-1" role="dialog" aria-labelledby="fuel_type_add_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Fuel Type</h4>
            </div>
            <form id="add_fuel_type_form" name="add_fuel_type_form">
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
<!-- modal -->

<!--Fuel Type Edit Modal -->
<div  id="fuel_type_edit_div" >
    <div class="modal-dialog">
        <div class="modal-content" id="fuel_type_edit_content">
            
        </div>
    </div>
</div>




<!-- active selected menu -->

<script type="text/javascript">
    $('#vehicle_spec_menu').addClass('active');


    $(document).ready(function() {

        $('#fuel_type_table').dataTable();

        //add fuel_type form validation
        $("#add_fuel_type_form").validate({
            rules: {
                name: "required"
            },
            messages: {
                name: "Please enter a title"
            }, submitHandler: function(form)
            {
                $.post(site_url + '/fuel_type/add_fuel_type', $('#add_fuel_type_form').serialize(), function(msg)
                {
                    if (msg == 1) {

                        add_fuel_type_form.reset();
                        window.location = site_url + '/fuel_type/manage_fuel_types';
                    } else {

                    }
                });
            }
        });
        
    });



    //delete fuel_types
    function delete_fuel_type(id) {

        if (confirm('Are you sure want to delete this Fuel Type?')) {

            $.ajax({
                type: "POST",
                url: site_url + '/fuel_type/delete_fuel_types',
                data: "id=" + id,
                success: function(msg) {
                    //alert(msg);
                    if (msg == 1) {
                        //document.getElementById(trid).style.display='none';
                        $('#fuel_type_' + id).hide();
                    }
                    else if (msg == 2) {
                        alert('Cannot be deleted!!');
                    }
                }
            });
        }
    }


    //change publish status of fuel_type
    function change_publish_status(fuel_type_id, value, element) {

        var condition = 'Do you want to activate this fuel_type ?';
        if (value == 0) {
            condition = 'Do you want to deactivate this fuel_type?';
        }

        if (confirm(condition)) {
            $.ajax({
                type: "POST",
                url: site_url + '/fuel_type/change_publish_status',
                data: "id=" + fuel_type_id + "&value=" + value,
                success: function(msg) {
                    if (msg == 1) {
                        if (value == 1) {
                            $(element).parent().html('<a class="btn btn-success btn-xs" onclick="change_publish_status(' + fuel_type_id + ',0,this)" title="click to deactivate fuel_type"><i class="fa fa-check"></i></a>');
                        } else {
                            $(element).parent().html('<a class="btn btn-warning btn-xs" onclick="change_publish_status(' + fuel_type_id + ',1,this)" title="click to activate fuel_type"><i class="fa fa-exclamation-circle"></i></a>');
                        }

                    } else if (msg == 2) {
                        alert('Error !!');
                    }
                }
            });
        }
    }


    //Edit Fuel Type
    function  display_edit_fuel_type_pop_up(fuel_type_id) {

        $.post(site_url + '/fuel_type/load_edit_fuel_type_content', {fuel_type_id: fuel_type_id}, function(msg) {

            $('#fuel_type_edit_content').html('');
            $('#fuel_type_edit_content').html(msg);
        });
        $("#fuel_type_edit_div").dialog({
            autoOpen: false,
            title: "Fuel Type Quick Edit",
            modal: true,
            width: "650"

        });
        $("#fuel_type_edit_div").dialog("option", {modal: true}).dialog("open");

    }
</script>
