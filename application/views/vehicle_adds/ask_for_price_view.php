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
            <button type="submit" class="btn framed icon" >Send<i class="fa fa-angle-right"></i></button>
        </div>
        <!-- /.form-group -->
    </form>
</figure>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script type="text/javascript">
//    $('#ask_for_price').addClass('active open');
    $(document).ready(function () {
        $('#ask_form').validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please Enter your Name"
                },
                email: {
                    required: "Please Enter an Email",
                    email: "Invalid Email"
                },
                phone: {
                    required: "Please enter a phone no",
                    digits: "Enter numbers only",
                    maxlength: "Phone number is too long",
                    minlength: "Phone number is too short"
                }
            }, submitHandler: function (form)
            {                                                  
                $.post(site_url + '/vehicle_advertisements/send_email_to_sellers', $('#ask_form').serialize(), function (msg) 
                {
                    alert("method executed");
                    if (msg == 1) {
                        alert("Done");
                        $('#rtn_msg').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully Sent!!.</strong></div>');
                        ask_form.reset();
//                        window.location = site_url + '/body_type/manage_body_types';
                    } else {
                        $('#rtn_msg').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');

                    }

                });
            }
        });

    });


//                function send_email() {
//
//                    $.ajax({
//                        type: "POST",
//                        url: '<?php echo site_url(); ?>/vehicle_advertisements/send_email_to_sellers',
//                        data: $('#ask_form').serialize(),
//                        success: function (msg) {
//                            toastr.success("Email successfully sent !!", "AutoVille");
//                        }
//                    });
//                }
</script>



