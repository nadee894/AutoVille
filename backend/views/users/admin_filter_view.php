
<?php
$i = 0;
$n = 0;
foreach ($results as $result) {
    ?>
    <div class="col-md-6 col-sm-6"id="admin_<?php echo $result->id; ?>" >
        <?php ++$i; ?>
        <div class="panel" >

            <div class="panel-body">
                <div class="media" >

                    <a class="pull-left" href="#">
                        <img alt="" class="thumb media-object" height="120" width="100" src="<?php echo base_url(); ?>/uploads/4.jpg" >
                    </a>

                    <div class="media-body" >

                        <?php if ($result->is_online) { ?>
                            <h4><i class="fa  fa-circle  text-success"></i>
                                <?php echo $result->name; ?> <span class="text-muted small"> - UI Engineer</span></h4>
                            <?php } else { ?>
                            <h4><i class="fa  fa-circle  text-danger"></i>
                                <?php echo $result->name; ?> <span class="text-muted small"> - UI Engineer</span></h4>

                        <?php } ?>
                        <ul class="social-links">
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>

                        <address>
                            <strong>Address : <?php echo $result->address; ?></strong><br>
                            <abbr title="Phone">P1:</abbr> <?php echo $result->contact_no_1; ?><br>
                            <abbr title="Phone2">P2:</abbr> <?php echo $result->contact_no_2; ?></address>
                        <email>E-mail : <?php echo $result->email; ?></email>




                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
