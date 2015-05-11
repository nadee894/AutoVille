<div class="col-md-9 col-sm-8">
    <h2>My Profile</h2>
    <div class="dashboard-block">
        <div class="tabs profile-tabs">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a role="tab" aria-controls="personalinfo" href="#personalinfo" data-toggle="tab" aria-expanded="true">Personal Info</a>
                </li>             
                <li class="">
                    <a role="tab" aria-controls="changepassword" href="#changepassword" data-toggle="tab" aria-expanded="false">Change Password</a>
                </li>
            </ul>
            <form id="edit_reg_user_profile_form" class="form-horizontal" role="form" method="POST" name="edit_reg_user_profile_form">
                <div class="tab-content">


                    <div id="personalinfo" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->name; ?>" id="name">
                                        <!--<input name="name" type="text" class="form-control" id="name" placeholder=" " value="<?php echo $user->name; ?>">-->
                                    </div>
                                    <div class="col-md-6">
                                        <label>Username</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->user_name; ?>" id="username">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->email; ?>" id="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->address; ?>" id="address">
                                    </div>
                                </div>                                                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Contact number 1</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->contact_no_1; ?>" id="contact_no_1">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Contact number 2</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->contact_no_2; ?>" id="contact_no_2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="changepassword" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Current Password</label>
                                        <input class="form-control" type="password" placeholder="" id="current_pwd">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>New password</label>
                                        <input class="form-control" type="password" placeholder="" id="new_pwd">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirm new password</label>
                                        <input class="form-control" type="password" placeholder="" id="confirm_new_pwd">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                   
                <button type="button" id="saveBtn" type="submit" class="btn btn-success">Update Details</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </form>
        </div>
    </div>
</div>

    <script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>


    <script type="text/javascript">

        $(document).ready(function() {

            $('#saveBtn').click(function() {
                var validator = $("#edit_reg_user_profile_form").validate();
                validator.resetForm();
            });

            $("#edit_reg_user_profile_form").validate({
                rules: {
                    name: {
                        required: true
                    },
                    user_name: "required",
                    email: {
                    required: true,
                    email: true
                },
                address: "required",
                    contact_no_1: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                contact_no_2: {
                    //required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                    current_pwd: "required",
                    new_pwd: "required",
                    confirm_new_pwd: {
                    required: true,
                    equalTo: '#new_pwd'
                }

            },
                messages: {
                    name: {
                    required: "Please enter your name"
                },
                user_name: "Please enter your user name",
                email: {
                    required: "Please enter your email",
                    email: "Invalid Email"
                },
                address: "Please enter your address",
                contact_no_1: {
                    required: "Please enter your contact number",
                    digits: "Enter numbers only",
                    maxlength: "Phone number is too long",
                    minlength: "Phone number is too short"
                },
                contact_no_2: {
                    digits: "Enter numbers only",
                    maxlength: "Phone number is too long",
                    minlength: "Phone number is too short"
                },
                current_pwd: "Please enter your password",
                new_pwd: "If you want to change the current password, enter a new one",
                confirm_new_pwd:
                        {
                            required: "Retype your new password",
                            equalTo: "Passwords do not match"
                        }
                }, submitHandler: function(form)
                {
                    $.post(site_url + '/reg_user_profile/update_reg_user_profile', $('#edit_reg_user_profile_form').serialize(), function(msg)
                    {
                        //alert(msg);
                        if (msg == 1) {
                            toastr.success("Successfully Updated", "AutoVille");
                            window.location = site_url + '/reg_user_profile/load_profile_of_reg_user'
                        } else {
                            toastr.error("Error!!", "AutoVille");

                        }
                    });
                }

            });
        });

    </script>








