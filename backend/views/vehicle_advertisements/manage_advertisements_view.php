<!-- page start-->
<section class="panel">
    <header class="panel-heading">
        All Advertisements
        <span class="pull-right">
            <button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button>
            <a href="#" class=" btn btn-success btn-xs"> Create New Project</a>
        </span>
    </header>
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <div class="input-group"><input type="text" placeholder="Search Here" class="input-sm form-control"> <span class="input-group-btn">
                        <button type="button" class="btn btn-sm btn-success"> Go!</button> </span></div>
            </div>
        </div>
    </div>
    <table class="table table-hover p-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Transmission</th>
                <th>Fuel Type</th>
                <th>Body Type</th>
                <th>Color</th>
                <th>Price</th>
                <th>Active Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-name">
                    <a href="project_details.html">Toyota Prius N77 Model</a>
                    <br>
                    <small>Created 13.03.2015</small>
                </td>
                <td class="p-team">
                    Auto
                </td>
                <td class="p-team">
                    Petrol
                </td>
                <td class="p-team">
                    Body Type
                </td>
                <td class="p-team">
                    Red
                </td>
                <td class="p-progress">
                    Rs.56000000.00
                </td>
                <td>
                    <span class="label label-primary">Active</span>
                </td>
                <td>
                    <a href="<?php echo site_url(); ?>/transmission/manage_transmissions" class="btn btn-primary btn-xs"><i class="fa fa-pencil"  title="Update"></i></a>
                    <a class="btn btn-danger btn-xs" onclick="delete_transmission(<?php //echo $result->id;         ?>)"><i class="fa fa-trash-o " title="Remove"></i></a>
                    <a href="project_details.html" class="btn btn-info btn-xs"><i class="fa fa-folder" title="View"></i></a>

                </td>
            </tr>
            <?php foreach ($results as $result) { ?>
                <tr>
                    <td class="p-name">
                        <a href="project_details.html"><?php echo ucfirst($result->manufacture . ' ' . $result->model . ' ' . $result->year); ?></a>
                        <br>
                        <small>Created <?php echo date('Y-m-d', strtotime($result->added_date)); ?></small>
                    </td>
                    <td class="p-team">
                        <?php echo $result->transmission; ?>
                    </td>
                    <td class="p-team">
                        <?php echo $result->fuel_type; ?>
                    </td>
                    <td class="p-team">
                        Body Type
                    </td>
                    <td class="p-team">
                        <?php echo $result->colour; ?>
                    </td>
                    <td class="p-progress">
                        <?php echo $result->price; ?>
                    </td>
                    <td>
                        <?php if ($result->is_published == '1') { ?>
                            <span class="label label-primary">Active</span>
                        <?php } elseif ($result->is_published == '0') { ?>
                            <span class="label label-default">Pending</span>  
                        <?php } else { ?>
                            <span class="label label-danger">Rejected</span>  
                        <?php } ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url(); ?>/transmission/manage_transmissions" class="btn btn-primary btn-xs"><i class="fa fa-pencil"  title="Update"></i></a>
                        <a class="btn btn-danger btn-xs" onclick="delete_transmission(<?php echo $result->id; ?>)"><i class="fa fa-trash-o " title="Remove"></i></a>
                        <a href="project_details.html" class="btn btn-info btn-xs"><i class="fa fa-folder" title="View"></i></a>

                    </td>
                </tr>

            <?php }
            ?>

        </tbody>
    </table>
</section>
<!-- page end-->


<!-- active selected menu -->

<script type="text/javascript">
                        $('#advertisements_menu').addClass('active');
</script>