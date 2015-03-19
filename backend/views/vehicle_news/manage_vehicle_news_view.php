<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Vehicle News
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a id="editable-sample_new" class="btn btn-shadow btn-primary" href="#vehicle_news_add_modal" data-toggle="modal">
                                Add New
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <table  class="display table table-bordered table-striped" id="vehicle_news_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Active Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($results as $result) {
                                ?>
                                <tr id="vehicle_news_<?php echo $result->id; ?>">
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $result->title; ?></td>
                                    <td><?php echo $result->content ?></td>

                                    <td align="center">
                                        <?php if ($result->is_published) { ?>
                                            <a class="btn btn-success btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 0, this)" title="click to deactivate this vehicle news"><i class="fa fa-check"></i></a> 
                                        <?php } else { ?> 
                                            <a class="btn btn-warning btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 1, this)" title="click to activate this vehicle news"><i class="fa fa-exclamation-circle"></i></a> 
                                        <?php } ?>
                                    </td>
                                    <td align="center">
    <!--                                        <a href="<?php echo site_url(); ?>/manufacture/manage_manufactures" class="btn btn-success btn-xs"><i class="fa fa-pencil"  data-original-title="Update"></i></a>-->
                                        <a class="btn btn-primary btn-xs" onclick="display_edit_vehicle_news_pop_up(<?php echo $result->id; ?>)"><i class="fa fa-pencil" data-original-title="Update"></i> </a>
                                        <a class="btn btn-danger btn-xs" onclick="delete_vehicle_news(<?php echo $result->id; ?>)" ><i class="fa fa-trash-o " title="" data-original-title="Remove"></i></a>

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

<!--add new vehicle news-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend_resources/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<div class="modal fade " id="vehicle_news_add_modal" tabindex="-1" role="dialog" aria-labelledby="vehicle_news_add_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Vehicle News</h4>
            </div>
            <form id="add_vehicle_news_form" name="add_vehicle_news_form">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Title</label>
                        <input id="name" class="form-control" name="name" type="text" placeholder="Enter Title">
                    </div>
                    <label for="content">Content</label>
                    <section class="panel">
                        <header class="panel-heading">
                            <?php echo $inner_title; ?>
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <textarea class="wysihtml5 form-control" id="content_text" name="content_text" rows="20">
                            <?php echo $content_data->content; ?>
                
                        </textarea>
                    </section>
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
    $('#comments_menu').addClass('active open');

    $(document).ready(function() {
        $('#vehicle_news_table').dataTable();
    });

    //change published status of the vehicle news

    function change_publish_status(vehicle_news_id, value, element) {
        var condition = 'Do you want to activate this vehicle news?';
        if (value == 0) {
            condition = 'Do you want to deactivate this vehicle news?';
        }

        if (confirm(condition)) {
            $.ajax({type: "POST",
                url: site_url + '/vehicle_news/change_publish_status',
                data: "id=" + vehicle_news_id + "&value=" + value,
                success: function(msg) {

                    if (msg == 1) {

                        if (value == 1) {
                            $(element).parent().html('<a class="btn btn-success btn-xs" onclick="change_publish_status(' + vehicle_news_id + ', 0, this)" title="click to deactivate vehicle news"><i class="fa fa-check"></i></a> ');
                        } else {
                            $(element).parent().html('<a class="btn btn-warning btn-xs" onclick="change_publish_status(' + vehicle_news_id + ', 1, this)" title="click to activate vehicle news"><i class="fa fa-exclamation-circle"></i></a> ');
                        }
                    } else if (msg == 2) {

                    }

                }
            });
        }
    }

    //delete the vehicle news
    function delete_vehicle_news(id) {
        if (confirm('Are you sure want ot delete this comment ?')) {
            $.ajax({
                type: "POST",
                url: site_url + '/vehicle_news/delete_vehicle_news',
                data: "id=" + id,
                success: function(msg) {
                    if (msg == 1) {
                        $('#vehicle_news_' + id).hide();
                    }
                    else if (msg == 2) {
                        alert('Cannot be deleted as it is already assigned to others. !!');
                    }

                }
            });
        }
    }
</script>

