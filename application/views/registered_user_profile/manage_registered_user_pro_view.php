<section>
    <h3>
        <i class="fa fa-user"></i>
        Personal Info
    </h3>
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <section>
                <h3>
                    <i class="fa fa-image"></i>
                    Profile Picture
                </h3>
                <div id="profile-picture" class="profile-picture dropzone dz-clickable">
                    <input type="file" name="file">
                    <div class="dz-default dz-message">
                        <span>Click or drop picture here</span>
                    </div>
                    <img alt="" src="assets/img/member-2.jpg">
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 col-sm-9">
            <section>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" value="John Doe" name="title">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" value="John Doe" name="name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" value="johndoe@example.com" name="email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" class="form-control" type="text" value="903-675-5323" pattern="\d*" name="mobile">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" class="form-control" type="text" value="(0)123 456 7890" pattern="\d*" name="phone">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

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
        <form validateIt id="edit_reg_user_profile_form" role="form" method="post" >
            <div class="tab-content">


                <div id="personalinfo" class="tab-pane fade active in">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Title</label>
                                    <input validateItRequiredMsg="Please enter the title." validateItRequired class="form-control" type="text" required="" placeholder="" value="<?php echo $user->title; ?>" id="title" name="title">
                                    <label id="title_error" style="color:red;"></label>
                                    <!--<input name="name" type="text" class="form-control" id="name" placeholder=" " value="<?php echo $user->name; ?>">-->
                                </div>
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input validateItRequiredMsg="Please enter your name." validateItRequired class="form-control" type="text" required="" placeholder="" value="<?php echo $user->name; ?>" id="name" name="name">
                                    <label id="name_error" style="color:red;"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input validateItRequiredMsg="Please enter your email." validateItRequired validateItEmail class="form-control" type="text" required="" placeholder="" value="<?php echo $user->email; ?>" id="email" name="email">
                                    <label id="email_error" style="color:red;"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Address</label>
                                    <input validateItRequiredMsg="Please enter your address." validateItRequired class="form-control" type="text" required="" placeholder="" value="<?php echo $user->address; ?>" id="address" name="address">
                                    <label id="address_error" style="color:red;"></label>
                                </div>
                            </div>                                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Contact number 1</label>
                                    <input validateItRequiredMsg="Please enter your contact no." validateItRequired validateItRegExp='(^[0-9]{10}$)' class="form-control" type="text" required="" placeholder="" value="<?php echo $user->contact_no_1; ?>" id="contact_no_1" name="contact_no_1">
                                    <label id="contact_no_1_error" style="color:red;"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Contact number 2</label>
                                    <input   validateItRegExp='^$|(^[0-9]{10}$)' class="form-control" type="text" required="" placeholder="" value="<?php echo $user->contact_no_2; ?>" id="contact_no_2" name="contact_no_2">
                                    <label id="contact_no_2_error" style="color:red;"></label>
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
                                    <input class="form-control" type="password" placeholder="" id="current_pwd" name="current_pwd">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>New password</label>
                                    <input validateItFieldDismatchMsg="Passwords mismatch!" validateItMatchWith="confirm_new_pwd" class="form-control" type="password" placeholder="" id="new_pwd" name="new_pwd">
                                    <label id="new_pwd_error" style="color:red;"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm new password</label>
                                    <input class="form-control" type="password" placeholder="" id="confirm_new_pwd" name="confirm_new_pwd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                   
            <input validateItSubmitBtn="noSubmit" validateItCallBack="submitForm" type="button" id="saveBtn" class="btn btn-success" value="Update Details" />
            <button type="button" class="btn btn-default">Cancel</button>
        </form>
    </div>
</div>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/validateIt.js"></script>

<script type="text/javascript">
    function submitForm() {
        var postData = $("#edit_reg_user_profile_form").serializeArray();
        var formURL = site_url + '/reg_user_profile/update_reg_user_profile';
        //alert(formURL); 


        $.ajax(
                {
                    url: formURL,
                    type: "POST",
                    data: postData,
                    success: function(data, textStatus, jqXHR)
                    {
                        //alert(data + ">>" + textStatus);
                        if (data == "SUCCESS") {
                            toastr.success("Successfully Updated", "AutoVille");
                        }
                        else
                            toastr.error("Error!!", "AutoVille");

                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {

                        toastr.error("Error!!", "AutoVille");
                    }
                });
        //$("#edit_reg_user_profile_form").submit(); //Submit  the FORM
    }

    $(document).ready(function() {


        /*   
         $("#edit_reg_user_profile_form").submit(function(e)
         {
         $("#edit_reg_user_profile_form").validate({
         rules: {},
         messages: {}, submitHandler: function(form)
         {
         alert("aaaaaaaaaaaaaaaaa");
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
         
         });*/
    });

</script>








