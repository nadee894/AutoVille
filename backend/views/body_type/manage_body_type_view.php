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
                        <table  class="display table table-bordered table-striped" id="manufacture_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Added By</th>
                                    <th>Added Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($results as $result) {
                                    ?>
                                    <tr>
                                        <td><?php echo ++$i; ?></td>
                                        <td><?php echo $result->name; ?></td>
                                        <td><?php echo $result->added_by_user; ?></td>
                                        <td><?php echo $result->added_date; ?></td>
                                        <td>
                                            <a href="<?php echo site_url(); ?>/Body_type/manage_body_types" class="btn btn-success btn-xs"><i class="fa fa-pencil"  data-original-title="Update"></i></a>
                                            <a class="btn btn-danger btn-xs"><i class="fa fa-trash-o " title="" data-original-title="Remove"></i></a>

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

<!--Manufacture add model-->
<div class="modal fade " id="manufacture_add_modal" tabindex="-1" role="dialog" aria-labelledby="body_type_add_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Manufacturer</h4>
            </div>
            <form id="add_manufacture_form" name="add_body_type_form">
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
        $('#manufacture_table').dataTable();

        $("#add_manufacture_form").validate({
            rules: {
                name: "required"
            },
            messages: {
                name: "Please enter a title"
            }, submitHandler: function(form)
            {
                $.post(site_url + '/manufacture/add_manufacture', $('#add_manufacture_form').serialize(), function(msg)
                {
                    if (msg == 1) {

                        add_manufacture_form.reset();
                        window.location = site_url + '/manufacture/manage_manufactures';
                    } else {

                    }
                });


            }
        });

    });

</script>

