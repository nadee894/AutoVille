
<!--Page Content-->
<div id="page-content">
    <section class="container">
        <div class="block">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <header>
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
                                <a data-toggle="modal" href="#myModal"> Forgot your Password?</a>
                            </span>
                        </label>
                        <!--End Forgot Password-->

                        <div class="form-group clearfix">
                            <button type="submit" onclick="login()" class="btn pull-right btn-default" id="account-submit">Sign In</button>
                        </div><!-- /.form-group -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.block-->
</div>
<!-- end Page Content-->


<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-success" type="button">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->


<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">

                                var base_url = "<?php echo base_url(); ?>";
                                var site_url = "<?php echo site_url(); ?>";

                                $(document).ready(function () {
                                    $("#login_form").validate({
                                        focusInvalid: false,
                                        ignore: "",
                                        rules: {
                                            txtusername: "required",
                                            txtpassword: "required"
                                        }, submitHandler: function (form) {
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
                                            success: function (msg) {

                                                if (msg == 1) {
                                                    setTimeout("location.href = site_url+'/login/load_login';", 100);
                                                } else {
                                                    login_form.reset();
                                                    alert("Invalid Login details...");
                                                }
                                            }
                                        });
                                    }
                                }

</script>

