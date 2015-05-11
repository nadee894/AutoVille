
<div class="top-label">
    <h4>
        <i class="fa fa-"></i>
        Ask for price
    </h4>

    <form name="form1">
        <i class="fa fa-user"></i>
        <input class="form-control" type="text" name="title" placeholder="Your Name"/>
        <i class="fa fa-envelope"></i>
        <input class="form-control" type="text" name="title2" placeholder="Your Email"/>
        <i class="fa fa-phone"></i>
        <input class="form-control" type="text" name="title3" placeholder="Your Phone"/>
        <br>
        <br>

    </form>

    <div class="field-row">
        <i class="icon-pencil"></i>
        <textarea id="ContactAgentForm_comment" name="comments" style="width:250px; height:100px;">Hello, I found your listing on Carmudi. Please, send me more information about Perodua Elite Viva 2012. Thank you</textarea></br></br>
    </div>

    <div>
        <!--        <div class="field checkbox ">
                    <i class="cb-box icon-check"></i>
                    <div class="cb-label" data-layer-action="save"> Save as an alert </div>
                    <input id="ContactAgentForm_saveasalert" type="hidden" name="ContactAgentForm[save_as_alert]" value="1">
                </div>
        
                <div>
                    <i class="cb-box icon-check"></i>
                    <div class="cb-label" data-layer-action="subscribe"> Subscribe to our newsletter </div>
                    <input id="ContactAgentForm_acceptemailoffers" type="hidden" name="ContactAgentForm[accept_email_offers]" value="1">
                </div>-->

        <input type="hidden" value="SU092CA68QPZINTCARLK" name="sku">
        <div data-ajax-local-messages=""></div>
        <div class="confirm-btn">
            <button id="lead-form-submit" onclick="send_email" class="btn btn-default" data-layer-label="SU092CA68QPZINTCARLK" data-layer-action="contact-seller"> Contact Seller </button>
        </div>
    </div>
    <!--</form>-->
</div>

<script type="text/javascript">

                function send_email() {

                    $.ajax({
                        type: "POST",
                        url: '<?php echo site_url(); ?>/vehicle_advertisements/send_email_to_sellers',
                        success: function(msg) {
                            $('#search_result').html(msg);
                        }
                    });
                }
</script>



