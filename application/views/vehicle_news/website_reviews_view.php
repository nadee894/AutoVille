

<div id="page-content">
    <section class="container">
        <div class="row">
            <div class="col-md-16"> 
                <ul class="comments" id="review_list">
                    <?php foreach ($website_comments_list as $value) { ?>  
                        <!--                                <div class="row">
                                                            <article class="blog-post">
                                                                <div class="image">
                        <?php if ($value->profile_pic == '') { ?>
                                                                                                <img class="img-responsive img-circle" style="width:100px; height:50px;" src="<?php echo base_url() . 'uploads/user_avatars/avatar.png'; ?>"/>
                        <?php } else { ?>
                                                                                                    <img class="img-responsive img-circle" style="width:100px; height:50px;" src="<?php echo base_url() . 'uploads/user_avatars/' . $value->profile_pic; ?>"/>
                        <?php } ?>
                                                                
                                                                <br><header><a href="blog-detail.html"><h1><?php echo $value->title; ?></h1></a></header>
                                                                <a href="blog-detail.html"></a>
                        
                                                                <p><?php echo $value->description; ?></p>
                                                                </div>
                        
                                                            </article>
                                                        </div>-->
                        <li class="comment"><br>
                            <figure><br><br>
                                <div class="image">
                                    <?php if ($value->profile_pic == '') { ?>
                                        <img class="img-responsive img-circle" style="width:100px; height:50px;" src="<?php echo base_url() . 'uploads/user_avatars/avatar.png'; ?>"/>
                                    <?php } else { ?>
                                        <img class="img-responsive img-circle" style="width:100px; height:50px;" src="<?php echo base_url() . 'uploads/user_avatars/' . $value->profile_pic; ?>"/>
                                    <?php } ?>
                                </div>
                            </figure>
                            <div class="comment-wrapper">
                                <?php if ($value->added_by_user != '') { ?>
                                    <div class="name pull-left"><?php echo ucfirst($value->added_by_user); ?></div>
                                <?php } ?>
                                <span class="date pull-right"><br><br><br><br>
                                    <span class="fa fa-calendar"></span>
                                    <?php echo date('Y.m.d', strtotime($value->added_date)); ?>
                                </span>
                                <header><a href="blog-detail.html"><h2><?php echo $value->title; ?></h2></a></header>
                                <p><?php echo $value->description; ?>
                            </div>
                        </li>

                    <?php } ?>
                </ul>
                <div class="comment_input">
                    <form name="c_form" id="c_form">
                        <input type="text" id="title" name="title" placeholder="Title..." style="width:700px; height:50px;"/></br><br>
                        <textarea name="comments" id="description" placeholder="Leave Comments Here..." style="width:700px; height:100px;"></textarea></br></br>
                        <input  type="button" onClick="commentadd()"  class="btn btn-default" value="Post"/></br>
                    </form>
                </div>

                <!--Pagination-->
                <nav>
                    <ul class="pagination pull-right">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" class="previous"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
                <!--end Pagination-->

                </section>

            </div>
            <!-- end Page Content-->


            <script>
                                function commentadd() {
                                    var description = $('#description').val();
                                    var title = $('#title').val();


                                    if (description != '' && title != '') {

                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo site_url(); ?>/website_comments/add_website_comments",
                                            data: "description=" + description + "&title=" + title,
                                            success: function(msg) {
                                                $('#review_list').html(msg);
                                                c_form.reset();
                                            }
                                        });
                                    }
                                }
            </script>

