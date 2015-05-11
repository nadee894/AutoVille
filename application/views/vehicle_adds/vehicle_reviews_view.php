<section id="comments">
    <!--    <header>-->
    <h3><span class="bold">Comments</span></h3>
    <!--    </header>-->
    <ul class="comments" id="review_list">
        <?php foreach ($vehicle_reviews as $value) { ?>
            <li class="comment"><br>
                <figure>
                    <div class="image">
                        <?php if ($value->profile_pic == '') { ?>
                            <img class="img-responsive img-circle" src="<?php echo base_url() . 'uploads/user_avatars/avatar.png'; ?>"/>
                        <?php } else { ?>
                            <img class="img-responsive img-circle" src="<?php echo base_url() . 'uploads/user_avatars/' . $value->profile_pic; ?>"/>
                        <?php } ?>
                    </div>
                </figure>
                <div class="comment-wrapper">
                    <?php if ($value->added_by_user != '') { ?>
                        <div class="name pull-left"><?php echo ucfirst($value->added_by_user); ?></div>
                    <?php } ?>
                    <span class="date pull-right">
                        <span class="fa fa-calendar"></span>
                        <?php echo date('Y.m.d', strtotime($value->added_date)); ?>
                    </span>
                    <p>
                        <?php echo $value->description; ?>
                </div><br>
            </li>
        <?php } ?> 
    </ul>
</section>

<div id="container">
    <div class="comment_input">
        <form name="form1">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <input type="hidden" id="vehicle_id" name="vehicle_id" value="<?php echo $vehicle_detail->id; ?>"/></br></br>
                        <textarea class="form-control" id="description" name="description" placeholder="Leave Comments Here..." rows="5"></textarea>
                    </div>
                    <div class="row">
                        <br/>
                        <button  type="button" onClick="commentSubmit()" class="btn pull-right btn-default">Post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
                            function commentSubmit() {
                                var description = $('#description').val();

                                if (description != '') {
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo site_url(); ?>/vehicle_reviews/add_vehicle_reviews",
                                        data: "description=" + description + "&vehicle_id=" + $('#vehicle_id').val(),
                                        success: function(msg) {
                                            $('#review_list').html(msg);

                                        }
                                    });
                                }
                            }
</script>
