
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Administrators
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <!-- page start-->
            <ul class="directory-list">
                <li><a href="#">a</a></li>
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
                    <div class="col-md-6 col-sm-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="thumb media-object" src="backend_resources/img/users/hesha.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 >Nadeesha Perera <span class="text-muted small">- UI Engineer</span></h4>
                                        <ul class="social-links">
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                        <address>
                                            <strong>VectorLab, Inc.</strong><br>
                                            Vamoil Ave, Suite 23<br>
                                            Dream land, Australia <br>
                                            <abbr title="Phone">P:</abbr> (142) 454-7890
                                        </address>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <?php
                    $i = 0;
                    foreach ($results as $result) {
                        ?>
                        <div class="col-md-6 col-sm-6"id="<?php echo $result->id; ?>">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="thumb media-object" src="img/photos/user1.png" alt="">
                                        </a>
                                        <div class="media-body" <?php echo++$i; ?> >
                                            <h4><?php echo $result->name; ?><span class="text-muted small"> - Front End Developer</span></h4>
                                            <ul class="social-links">
                                                <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                            <address>
                                                <strong><?php echo $result->user_type; ?></strong><br>
                                               <?php echo $result->user_name; ?><br>
                                                <?php echo $result->is_published; ?><br>
                                                <abbr title="Password"></abbr> <?php echo $result->password; ?>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- page end-->

        </section>
    </div>
</div>
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

