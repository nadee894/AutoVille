

<header class="panel-heading">
    Manage Administrators
    <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down"></a>
        <a href="javascript:;" class="fa fa-times"></a>
    </span>
</header>
<!-- page start-->
<ul class="directory-list">
    <li><a href="<?php echo site_url(); ?>/users/load_admins_by_letter/A">a</a></li>
    <li><a href="#">b</a></li>
    <li><a href="#">c</a></li>
    <li><a href="#">d</a></li>
    <li><a href="#">e</a></li>
    <li><a href="#">f</a></li>
    <li><a href="#">g</a></li>
    <li><a href="#">h</a></li>
    <li><a href="#">i</a></li>
    <li><a href="#">j</a></li>
    <li><a href="#">k</a></li>
    <li><a href="#">l</a></li>
    <li><a href="#">m</a></li>
    <li><a href="#">n</a></li>
    <li><a href="#">o</a></li>
    <li><a href="#">p</a></li>
    <li><a href="#">q</a></li>
    <li><a href="#">r</a></li>
    <li><a href="#">s</a></li>
    <li><a href="#">t</a></li>
    <li><a href="#">u</a></li>
    <li><a href="#">v</a></li>
    <li><a href="#">w</a></li>
    <li><a href="#">x</a></li>
    <li><a href="#">y</a></li>
    <li><a href="#">z</a></li>
</ul>
<div class="directory-info-row">
    <div class="row">

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


    </div>
</div>
<!-- page end-->

<script type="text/javascript">

    //change Online status of body types
    function change_online_status(user_id, value, element) {


    $.ajax({
    type: "POST",
            url: site_url + '/users/change_online_status',
            data: "id=" + user_id + "&value=" + value,
            success: function (msg) {
            if (msg == 1) {
            if (value == 1) {
            $(element).parent().html('<h4><i class="fa  fa-circle  text-success"></i><?php echo $result->name; ?> <span class="text-muted small"> - UI Engineer</span></h4>');
            } else {
            $(element).parent().html('<h4><i class="fa  fa-circle  text-danger"></i><?php echo $result->name; ?> <span class="text-muted small"> - UI Engineer</span></h4>');
            }

            } else if (msg == 2) {
            alert('Error !!');
            }
            }
    });
    }

    //load admins by letter
    function load_admins_by_letter(letter) {


    $.ajax({
            type: "POST",
            url: site_url + '/users/load_admins_by_letter',
            data:"letter_=" + letter,
//           $user_service = new User_service();

//            $user_type = $user_service - > load_admins_by_letter($letter);
//            $data['results'] = $user_type;
//            echo $this - > load - > view('users/manage_admin_view', $data, TRUE);
    });
    }



</script>