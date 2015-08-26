<header><h3>Ask For Price</h3></header>
<figure>
    <form id="ask_form" name="ask_form" role="form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control framed" id="name" name="name" required="">
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" class="form-control framed" id="user_email" name="user_email" required="">
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control framed" id="phone" name="phone" required="">
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <label for="ContactAgentForm_comment">Message</label>
            <textarea class="form-control framed" id="ContactAgentForm_comment" name="comments"  rows="5" required="">Hello, I found your listing on AutoVille. Please, send me more information about <?php echo $vehicle_detail->manufacture . ' ' . $vehicle_detail->model; ?><?php echo $vehicle_detail->year; ?>. Thank you</textarea>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <input type="hidden" value="SU092CA68QPZINTCARLK" name="sku">
            <div data-ajax-local-messages=""></div>
            <input type="hidden" name="sender_email" id="sender_email" value="<?php echo $vehicle_detail->user_email; ?>" />
            <button type="button" class="btn framed icon" onclick="send_email()">Send<i class="fa fa-angle-right"></i></button>
        </div>
        <!-- /.form-group -->
    </form>
</figure>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script type="text/javascript">

                function send_email() {

                    $.ajax({
                        type: "POST",
                        url: '<?php echo site_url(); ?>/vehicle_advertisements/send_email_to_sellers',
                        data: $('#ask_form').serialize(),
                        success: function(msg) {
                            toastr.success("Email successfully sent !!", "AutoVille");
                        }
                    });
                }
</script>



