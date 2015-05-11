
<!--Page Content-->
<div id="page-content">
    <section class="container">
        <div class="block">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <header>
                        <h1 class="page-title">Register</h1>
                    </header>
                    <hr>
                    <form role="form" id="form-register" name="form-register" method="post" >
                        <div class="form-group">
                            <label for="form-register-full-name">Full Name:<span class="mandatory">*</span></label>
                            <input type="text" class="form-control" id="form-register-full-name" name="form_register_full_name" >
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-email">Email:<span class="mandatory">*</span></label>
                            <input type="email" class="form-control" id="form-register-email" name="form_register_email" >
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label for="form-register-contact">Telephone:<span class="mandatory">*</span></label>
                            <input type="text" class="form-control" id="form-register-contact" name="form_register_contact" >
                        </div>

                        <div class="form-group">
                            <label for="form-register-address">Address:<span class="mandatory">*</span></label>
                            <input type="text" class="form-control" id="form-register-address" name="form_register_address" >
                        </div>

                        <div class="form-group">
                            <label for="form-register-user_name">Username:<span class="mandatory">*</span></label>
                            <input type="text"  class="form-control" id="form-register-user_name" name="form_register_user_name" >
                        </div>

                        <div class="form-group">
                            <label for="form-register-password">Password:<span class="mandatory">*</span></label>
                            <input type="password" class="form-control" id="form_register_password" name="form_register_password" >
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-confirm-password">Confirm Password:<span class="mandatory">*</span></label>
                            <input type="password" class="form-control" id="form-register-confirm-password" name="form_register_confirm_password" >
                        </div><!-- /.form-group -->

                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Create an Account</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center">
                        <figure class="note">By clicking the “Create an Account” button you agree with our <a href="terms-conditions.html" class="link">Terms and conditions</a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.block-->
</div>
<!-- end Page Content-->


<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $('#account-submit').click(function() {
            var validator = $("#form-register").validate();
            validator.resetForm();

        });

        $("#form-register").validate({
            rules: {
                form_register_full_name: {
                    required: true
                },
                form_register_email: {
                    required: true,
                    email: true
                },
                form_register_contact: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                form_register_address: "required",
                form_register_user_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 30
                },
                form_register_password: "required",
                form_register_confirm_password: {
                    required: true,
                    equalTo: "#form_register_password"
                }
            },
            messages: {
                form_register_full_name: "Please enter your full name",
                form_register_email: {
                    required: "Please enter your email",
                    email: "Incorrect email address"

                },
                form_register_contact: "Please enter your telephone number",
                form_register_address: "Please enter your address",
                form_register_user_name: "Please enter a valid user name",
                form_register_password: "Please enter a password",
                form_register_confirm_password: {
                    required: "Confirm the password",
                    equalTo: "Passwords do not match"
                }
            }, submitHandler: function(form)
            {
                $.post(site_url + '/register_users/add_new_user', $('#form-register').serialize(), function(msg)
                {
                    //alert(msg);
                    if (msg == 1) {
                        toastr.success("Successfully Registered", "AutoVille");
                        window.location = site_url + '/home';
                    } else {
                        toastr.error("Error in registration", "AutoVille");

                    }
                });
            }

        });
    });



</script>



