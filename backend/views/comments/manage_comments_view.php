<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Website Reviews
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div class="clearfix">
<!--                        <div class="btn-group">
                            <a id="editable-sample_new" class="btn btn-shadow btn-primary" href="#comments_add_modal" data-toggle="modal">
                                Add New
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>-->
                    </div>
                    <table  class="display table table-bordered table-striped" id="manufacture_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Active Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($results as $result) {
                                ?>
                                <tr id="comments_<?php echo $result->id; ?>">
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $result->title; ?></td>
                                    <td><?php echo $result->description; ?></td>
                                    <td align="center">
                                        <?php if ($result->is_published) { ?>
                                            <a class="btn btn-success btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 0, this)" title="click to deactivate manufacture"><i class="fa fa-check"></i></a> 
                                        <?php } else { ?> 
                                            <a class="btn btn-warning btn-xs" onclick="change_publish_status(<?php echo $result->id; ?>, 1, this)" title="click to activate manufacture"><i class="fa fa-exclamation-circle"></i></a> 
                                        <?php } ?>
                                    </td>
                                    <td align="center">
<!--                                        <a href="<?php echo site_url(); ?>/comments/manage_comments" class="btn btn-success btn-xs"><i class="fa fa-pencil"  data-original-title="Update"></i></a>-->
                                        <a class="btn btn-danger btn-xs" onclick="delete_comment(<?php echo $result->id; ?>)" ><i class="fa fa-trash-o " title="" data-original-title="Remove"></i></a>

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

