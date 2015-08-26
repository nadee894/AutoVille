<section class="block" id="reviews">
    <header class="clearfix">
        <h2 class="pull-left">Reviews</h2>
        <a href="#write-review" class="btn framed icon pull-right roll">Write a review <i class="fa fa-pencil"></i></a>
    </header>

    <section class="reviews" id="review_list">
        <?php foreach ($vehicle_reviews as $value) { ?>
            <article class="review">
                <figure class="author">
                    <?php if ($value->profile_pic == '') { ?>
                        <img class="img-responsive " src="<?php echo base_url() . 'uploads/user_avatars/avatar.png'; ?>"/>
                    <?php } else { ?>
                        <img class="img-responsive " src="<?php echo base_url() . 'uploads/user_avatars/' . $value->profile_pic; ?>"/>
                    <?php } ?>
                    <div class="date"><?php echo date('Y.m.d', strtotime($value->added_date)); ?></div>
                </figure>
                <!-- /.author-->
                <div class="wrapper">
                    <?php if ($value->added_by_user != '') { ?>
                        <h5><?php echo ucfirst($value->added_by_user); ?></h5>
                    <?php } ?>
                    <p>
                        <?php echo $value->description; ?>
                    </p>
                </div>
                <!-- /.wrapper-->
            </article>
        <?php } ?>
        <!-- /.review -->
    </section>
    <!-- /.reviews-->
</section>
<!-- /#reviews -->
<!--end Reviews-->
<!--Review Form-->
<section id="write-review">
    <header>
        <h2>Write a Review</h2>
    </header>
    <form id="form1" class="background-color-white">
        <div class="row">
            <div class="col-md-12">
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="form-review-message">Message</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Leave Comments Here..." rows="3" required=""></textarea>
                    <input type="hidden" id="vehicle_id" name="vehicle_id" value="<?php echo $vehicle_detail->id; ?>"/>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <button type="button" onclick="commentSubmit()" class="btn btn-default">Submit Review</button>
                </div>
                <!-- /.form-group -->
            </div>
        </div>
    </form>
    <!-- /.main-search -->
</section>


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
                    $('#description').val('');
                }
            });
        }
    }
</script>
