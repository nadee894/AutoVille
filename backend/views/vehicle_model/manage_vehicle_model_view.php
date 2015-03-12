<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Vehicle Models
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="vehicle_model_table">
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
                                    <td><?php echo++$i; ?></td>
                                    <td><?php echo $result->name; ?></td>
                                    <td><?php echo $result->added_by; ?></td>
                                    <td><?php echo $result->added_date; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>/transmission/manage_transmissions" class="btn btn-success btn-xs"><i class="fa fa-pencil"  data-original-title="Update"></i></a>
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















