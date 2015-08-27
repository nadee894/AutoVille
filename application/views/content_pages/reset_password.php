<!--Page Content-->
<div id="page-content">
    <section class="container">
        <div class="block">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <header>
                        <h1 class="page-title">Reset Password</h1>
                    </header>
                    <hr>
                    <form role="form" id="password_reset_form" name="password_reset_form" method="post">
                        <div class="form-group">
                            <label for="form-sign-in-Username">Username:</label>
                            <input id="username" name="username" type="text" class="form-control" placeholder="Username" autofocus>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-sign-in-password">New Password:</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-sign-in-password">Confirm Password:</label>
                            <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Password">
                        </div><!-- /.form-group -->       

                        <div class="form-group clearfix">
                            <input type="submit" class="btn pull-right btn-default" id="reset_button" value="Sign In">
                        </div><!-- /.form-group -->
                    </form>
                    <div id="reset_msg" style="display: none">
                        <div class="alert alert-success">
                            <i class="fa fa-check-circle fa-fw fa-lg"></i>
                            Successfull!!!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.block-->
</div>
<!-- end Page Content-->

<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $("#password_reset_form").validate({
            ignore: "",
            rules: {
                username: {required: true},
                password: {required: true},
                confirm_password: {required: true, equalTo: "#password"}
            },
            submitHandler: function(form) {

                var $form = $('#password_reset_form');

                $.ajax({
                    type: 'POST',
                    url: site_url + '/login/update_password',
                    data: $form.serialize(),
                    success: function(msg) {

                        if (msg == '1') {
                            $('#reset_msg').html('<div class="alert alert-success"><i class="fa fa-check-circle fa-fw fa-lg"></i>Successfull!!!</div>');
                            $('#reset_msg').fadeIn();
                            $('#reset_msg').fadeOut(4000);
                            setTimeout("location.href = site_url+'/login/load_login';", 100);
                        } else if (msg == '2') {
                            $('#reset_msg').html('<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i>Error Occured!!</div>');
                            $('#reset_msg').fadeIn();
                            $('#reset_msg').fadeOut(4000);
                            password_reset_form.reset();
                        } else {
                            $('#reset_msg').html('<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i>Invalid User!!!</div>');
                            $('#reset_msg').fadeIn();
                            $('#reset_msg').fadeOut(4000);
                            password_reset_form.reset();
                        }

                    },
                    error: function(msg) {
                        alert("Error!");
                    }
                });

            }
        });
    });

</script>

