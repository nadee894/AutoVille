<h2>Compare Vehicles</h2>
<div>
    <div class="dashboard-block">
        <div class="">
            <table class="table table-bordered table-striped">

                <tr>
                    <th>Vehicle</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $result->id . '/' . $result->image_path; ?>" height="80" width="160" alt=""/></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th></th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><h4><?php echo $result->manufacture . " " . $result->model . " " ?>
                                <?php
                                if (!is_null($result->year)) {
                                    echo $result->year;
                                }
                                ?></h4></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Price</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo "Rs. " . number_format($result->price, 2, '.', ','); ?></td>
                    <?php } ?>
                </tr>

            </table>

            <h2>Engine, Performance & Main Details</h2>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Manufacturer</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->manufacture; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Model</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->model; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Build(year)</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->year; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Body Type</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->body_type; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Transmission</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->transmission; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Fuel</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->fuel_type; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Chassis No</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->chassis_no; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Mileage (in km)</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->kilometers; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Color</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->colour; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Condition</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->sale_type; ?></td>
                    <?php } ?>
                </tr>

                <tr>
                    <th>Doors</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->doors; ?></td>
                    <?php } ?>
                </tr>

            </table>

            <h2>Equipment</h2>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Air Condition</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->manufacture; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <th>Air Condition</th>
                    <?php foreach ($vehicle_list as $result) { ?>
                        <td><?php echo $result->manufacture; ?></td>
                    <?php } ?>
                </tr>
            </table>
        </div>
    </div>
    
</div>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
