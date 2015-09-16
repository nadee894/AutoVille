
<!--Page Content-->
<div id="page-content">
    <section class="container">
        <div class="block">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <header>
                        <meta name="google-signin-client_id" content="985266696918-0t2g0klgc5omnq1mbchcvf9navi9v6dh.apps.googleusercontent.com">
                        <?php
                        if($this->session->flashdata('info')){
                         ?>
                            <div class="alert alert-info" role="alert">
                                <?php echo $this->session->flashdata('info'); ?>
                            </div> 
                             
                             <?php   
                        }
                        ?>
                        <h1 class="page-title">Sign In</h1>
                    </header>
                    <hr>
                    <form role="form" id="login_form" name="login_form" method="post">
                        <div class="form-group">
                            <label for="form-sign-in-Username">Username:</label>
                            <input id="txtusername" name="txtusername" type="text" class="form-control" placeholder="Username" autofocus>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-sign-in-password">Password:</label>
                            <input id="txtpassword" name="txtpassword" type="password" class="form-control" placeholder="Password">
                        </div><!-- /.form-group -->

                        <!--Forgot Password-->
                        <label class="form-group">

                            <span class="pull-left">
                                <a data-toggle="modal" href="#forgot_password_model"> Forgot your Password?</a>
                            </span>
                        </label>
                        <!--End Forgot Password-->

                        <div class="form-group clearfix">
                            <button type="submit" onclick="login()" class="btn pull-right btn-default" id="account-submit">Sign In</button>
                        </div><!-- /.form-group -->
                    </form>
                    <div id="login_msg" style="display: none">
                        <div class="alert alert-success">
                            <i class="fa fa-check-circle fa-fw fa-lg"></i>
                            Login Successfull!!
                        </div>
                    </div>
                </div>   
                <div class="col-md-4">
                    <div id="my-signin2" data-onsuccess="onSuccess"></div>

                </div>

            </div>
        </div>
    </section>
    <!-- /.block-->
</div>
<!-- end Page Content-->

<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">

                                function onSuccess(googleUser) {
                                    var profile = googleUser.getBasicProfile();
                                    var name = profile.getName();
                                    var image_url = profile.getImageUrl();
                                    var email = profile.getEmail();

                                    // The ID token you need to pass to your backend:
                                    var id_token = googleUser.getAuthResponse().id_token;


                                    $.ajax({
                                        type: 'POST',
                                        url: site_url + '/login/google_authenticate_user',
                                        success: function(result) {
                                            if (result) {
                                                $('#login_msg').html('<div class="alert alert-success"><i class="fa fa-check-circle fa-fw fa-lg"></i>Login Successfull!!</div>');
                                                $('#login_msg').fadeIn();
                                                $('#login_msg').fadeOut(4000);
                                                setTimeout("location.href = site_url;", 100);
                                            } else {

                                                $('#login_msg').html('<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i>Google Plus Authentication Failed!!</div>');
                                                $('#login_msg').fadeIn();
                                                $('#login_msg').fadeOut(4000);

                                            }
                                        },
                                        data: {code: id_token, name: name, image_url: image_url, email: email}
                                    });
                                }

                                function onFailure(error) {
                                    console.log(error);
                                }

                                function renderButton() {
                                    gapi.signin2.render('my-signin2', {
                                        'scope': 'https://www.googleapis.com/auth/plus.login',
                                        'width': 200,
                                        'height': 50,
                                        'longtitle': true,
                                        'theme': 'dark',
                                        'onsuccess': onSuccess,
                                        'onfailure': onFailure
                                    });
                                }


                                var base_url = "<?php echo base_url(); ?>";
                                var site_url = "<?php echo site_url(); ?>";

                                $(document).ready(function() {

                                    $("#login_form").validate({
                                        focusInvalid: false,
                                        ignore: "",
                                        rules: {
                                            txtusername: "required",
                                            txtpassword: "required"
                                        }, submitHandler: function(form) {
                                        }
                                    });


                                    $("#reset_pw_form").validate({
                                        focusInvalid: false,
                                        ignore: "",
                                        rules: {
                                            reset_pw_email: "required"
                                        }, submitHandler: function(form) {

                                            var $form = $('#reset_pw_form');

                                            $.ajax({
                                                type: "POST",
                                                url: site_url + '/login/forget_password',
                                                data: $form.serialize(),
                                                success: function(msg) {
                                                    if (msg == '1') {
                                                        $('#fade_valid_msg').html('<div class="alert alert-success"><i class="fa fa-check-circle fa-fw fa-lg"></i>Email Sent!!</div>');
                                                        $('#fade_valid_msg').fadeIn();
                                                        $('#fade_valid_msg').fadeOut(7000);
                                                        $('#forgot_password_model').modal('hide');
                                                    } else if (msg == '2') {
                                                        $('#fade_valid_msg').html('<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i>Email Not Sent!!</div>');
                                                        $('#fade_valid_msg').fadeIn();
                                                        $('#fade_valid_msg').fadeOut(4000);
                                                    } else {
                                                        $('#fade_valid_msg').html('<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i>Invalid User or Email!!</div>');
                                                        $('#fade_valid_msg').fadeIn();
                                                        $('#fade_valid_msg').fadeOut(4000);
                                                    }
                                                }
                                            });

                                        }
                                    });
                                });


                                function login() {
                                    var login_username = $('#txtusername').val();
                                    var login_password = $('#txtpassword').val();

                                    if ($('#login_form').valid()) {

                                        $.ajax({
                                            type: "POST",
                                            url: site_url + '/login/authenticate_user',
                                            data: "login_username=" + login_username + "&login_password=" + login_password,
                                            success: function(msg) {

                                                if (msg == 1) {
                                                    $('#login_msg').html('<div class="alert alert-success"><i class="fa fa-check-circle fa-fw fa-lg"></i>Login Successfull!!</div>');
                                                    $('#login_msg').fadeIn();
                                                    $('#login_msg').fadeOut(4000);
                                                    setTimeout("location.href = site_url+'/login/load_login';", 100);
                                                } else {
                                                    login_form.reset();
                                                    $('#login_msg').html('<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i>Invalid Login Details!!</div>');
                                                    $('#login_msg').fadeIn();
                                                    $('#login_msg').fadeOut(4000);

                                                }
                                            }
                                        });
                                    }
                                }

</script>

