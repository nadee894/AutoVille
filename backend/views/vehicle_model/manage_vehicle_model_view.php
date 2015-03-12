<div id="page-title">
    <h2>Manage Vehicle Models</h2>
    <p>Tables with a lot of advanced, easy to use features and options.</p>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Responsive data tables
        </h3>
        <div class="example-box-wrapper">
            <table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
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
                    $i=0;
                    foreach ($results as $result) {
                        ?>
                        <tr>
                            <td><?php echo ++$i;?></td>
                            <td><?php echo $result->name;?></td>
                            <td><?php echo $result->added_by;?></td>
                            <td><?php echo $result->added_date;?></td>
                            <td>
                                <a href="<?php echo site_url(); ?>/transmission/manage_transmissions"><i class="glyph-icon tooltip-button demo-icon icon-pencil" title="" data-original-title="Update"></i></a>
                                <a><i class="glyph-icon tooltip-button demo-icon icon-trash" title="" data-original-title="Remove"></i></a>
                                
                            </td>
                        </tr>
                        <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>