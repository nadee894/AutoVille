

<header class="panel-heading">
    Manage Administrators
    <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down"></a>
        <a href="javascript:;" class="fa fa-times"></a>
    </span>
</header>
<!-- page start-->
<ul class="directory-list">
    <li><a onclick="load_admins_by_letter('A')" style="cursor: pointer">a</a></li>
    <li><a onclick="load_admins_by_letter('B')" style="cursor: pointer">b</a></li>
    <li><a onclick="load_admins_by_letter('C')" style="cursor: pointer">c</a></li>
    <li><a onclick="load_admins_by_letter('D')" style="cursor: pointer">d</a></li>
    <li><a onclick="load_admins_by_letter('E')" style="cursor: pointer">e</a></li>
    <li><a onclick="load_admins_by_letter('F')" style="cursor: pointer">f</a></li>
    <li><a onclick="load_admins_by_letter('G')" style="cursor: pointer">g</a></li>
    <li><a onclick="load_admins_by_letter('H')" style="cursor: pointer">h</a></li>
    <li><a onclick="load_admins_by_letter('I')" style="cursor: pointer">i</a></li>
    <li><a onclick="load_admins_by_letter('J')" style="cursor: pointer">j</a></li>
    <li><a onclick="load_admins_by_letter('K')" style="cursor: pointer">k</a></li>
    <li><a onclick="load_admins_by_letter('L')" style="cursor: pointer">l</a></li>
    <li><a onclick="load_admins_by_letter('M')" style="cursor: pointer">m</a></li>
    <li><a onclick="load_admins_by_letter('N')" style="cursor: pointer">n</a></li>
    <li><a onclick="load_admins_by_letter('O')" style="cursor: pointer">o</a></li>
    <li><a onclick="load_admins_by_letter('P')" style="cursor: pointer">p</a></li>
    <li><a onclick="load_admins_by_letter('Q')" style="cursor: pointer">q</a></li>
    <li><a onclick="load_admins_by_letter('R')" style="cursor: pointer">r</a></li>
    <li><a onclick="load_admins_by_letter('S')" style="cursor: pointer">s</a></li>
    <li><a onclick="load_admins_by_letter('T')" style="cursor: pointer">t</a></li>
    <li><a onclick="load_admins_by_letter('U')" style="cursor: pointer">u</a></li>
    <li><a onclick="load_admins_by_letter('V')" style="cursor: pointer">v</a></li>
    <li><a onclick="load_admins_by_letter('W')" style="cursor: pointer">w</a></li>
    <li><a onclick="load_admins_by_letter('X')" style="cursor: pointer">x</a></li>
    <li><a onclick="load_admins_by_letter('Y')" style="cursor: pointer">y</a></li>
    <li><a onclick="load_admins_by_letter('Z')" style="cursor: pointer">z</a></li>
</ul>
<div class="directory-info-row">
    <div class="row" id="admin_filter_content">

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
                                        <?php echo $result->name; ?> <span class="text-muted small"> - <?php echo $result->type; ?></span></h4>
                                    <?php } else { ?>
                                    <h4><i class="fa  fa-circle  text-danger"></i>
                                        <?php echo $result->name; ?> <span class="text-muted small"> - UI Engineer</span></h4>

                                <?php } ?>
                                <!--                                <ul class="social-links">
                                                                    <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                                    <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                                                    <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                                                </ul>-->

                                <address>Address : <?php echo $result->address; ?><br>
                                    <abbr title="Phone">Tel:</abbr> <?php echo $result->contact_no_1; ?><br>
                                    <!--<abbr title="Phone2">P2:</abbr> <?php echo $result->contact_no_2; ?></address>-->
                                    <email>E-mail : <?php echo $result->email; ?></email><br>
                                    <br>
                                    <br>
                                    <button class="btn btn-info btn-xs" type="button">Assign Privileges</button>
                                    <a class="btn btn-warning btn-xs" ><i class="fa fa-ban" title="Disable"></i></a>
                                    <a class="btn btn-danger btn-xs" ><i class="fa fa-trash-o " title="" title="Remove"></i></a>



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

    $('#user_menu').addClass('active');


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
            data: "myletter=" + letter,
            success: function (msg)
            {
                $('#admin_filter_content').html(msg);
            }
        });
    }

    //load admins by letter
    function load_all_admins() {

        var address = $('#address');
        var contact_no_01 = $('#contact_no_1');
        var contact_no_02 = $('#contact_no_2');


    }


</script>