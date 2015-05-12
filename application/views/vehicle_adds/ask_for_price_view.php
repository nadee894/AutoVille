
<div class="top-label">
    <h4>
        <i class="fa fa-"></i>
        Ask for price
    </h4>

    <form name="form1">

        <div class="form-group">
            <input class="form-control" type="text" name="title" placeholder="Your Name"/>
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="title2" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="title3" placeholder="Your Phone"/>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="ContactAgentForm_comment" name="comments" rows="3">Hello, I found your listing on AutoVille. Please, send me more information about <?php echo $vehicle_detail->manufacture . ' ' . $vehicle_detail->model; ?><?php echo $vehicle_detail->year; ?>. Thank you</textarea>
        </div>

    </form>


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

<?php
if (isset($_POST['button_pressed'])) {
    
}
?>
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



