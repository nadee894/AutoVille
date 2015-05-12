
<div class="top-label">
    <h4>
        <i class="fa fa-"></i>
        Ask for price
    </h4>

    <form name="ask_form" id="ask_form">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Your Name"/>
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="user_email" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="phone" placeholder="Your Phone"/>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="ContactAgentForm_comment" name="comments" rows="3">Hello, I found your listing on AutoVille. Please, send me more information about <?php echo $vehicle_detail->manufacture . ' ' . $vehicle_detail->model; ?><?php echo $vehicle_detail->year; ?>. Thank you</textarea>
        </div>

        <div>


            <input type="hidden" value="SU092CA68QPZINTCARLK" name="sku">
            <div data-ajax-local-messages=""></div>
            <div class="confirm-btn">
                <input type="hidden" name="user_email" id="user_email" value="<?php echo $vehicle_detail->user_email; ?>" />
                <input type="button" id="lead-form-submit" onclick="send_email()" class="btn btn-default" value=" Contact Seller"> 
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">

                function send_email() {

                    $.ajax({
                        type: "POST",
                        url: '<?php echo site_url(); ?>/vehicle_advertisements/send_email_to_sellers',
                        data:$('#ask_form').serialize(),
                        success: function(msg) {
                            $('#search_result').html(msg);
                        }
                    });
                }
</script>



