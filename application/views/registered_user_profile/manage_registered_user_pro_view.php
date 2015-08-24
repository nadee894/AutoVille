<section>
    <div class="row">
        <div class="col-md-9 col-sm-9">
            <h3>
                <i class="fa fa-user"></i>
                Personal Info
            </h3>

            <form validateIt id="edit_reg_user_profile_form" role="form" method="post" >
                <div class="row">
                    <div class="col-md-12">
                        <section>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="title">Title <span style="color: red;">*</span></label>
                                        <input id="title" class="form-control" type="text" value="<?php echo $user->title; ?>" name="title">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name <span style="color: red;">*</span></label>
                                        <input id="name" class="form-control" type="text" value="<?php echo $user->name; ?>" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="contact_no_1">Mobile <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $user->contact_no_1; ?>" id="contact_no_1" name="contact_no_1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="contact_no_2">Phone <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $user->contact_no_2; ?>" id="contact_no_2" name="contact_no_2">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red;">*</span></label>
                                        <input id="email" class="form-control" type="email" value="<?php echo $user->email; ?>" name="email">
                                    </div>
                                </div>

                            </div>
                        </section>
                        <section>
                            <h3>
                                <i class="fa fa-map-marker"></i>
                                Address
                            </h3>
                            <div class="form-group">
                                <textarea id="address" class="form-control" name="address"><?php echo $user->address; ?></textarea>
                            </div>
                        </section>
                        <div class="form-group">
                            <input validateItSubmitBtn="noSubmit" validateItCallBack="submitForm" type="button" class="btn btn-large btn-default" value="Save Changes" />
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-9">
            <section>
                <div class="col-md-12">
                    <h3>
                        <i class="fa fa-image"></i>
                        Profile Picture
                    </h3>
                    <div id="profile-picture" class="profile-picture dropzone dz-clickable">
                        <input type="file" name="file">
                        <div class="dz-default dz-message">
                            <span>Click or drop picture here</span>
                        </div>
                        <?php if ($user->profile_pic != '') { ?>
                            <img alt="" src="<?php echo base_url(); ?>uploads/user_avatars/<?php echo $user->profile_pic; ?>">
                        <?php } else { ?>
                            <img alt="" src="<?php echo base_url(); ?>uploads/user_avatars/avatar.png">
                        <?php } ?>
                    </div>
                </div>
            </section>

            <section>
                <h3>
                    <i class="fa fa-asterisk"></i>
                    Password Change
                </h3>
                <form id="form-password" class="framed" action="?" method="post" role="form">
                    <div class="form-group">
                        <label for="current_pwd">Current Password</label>
                        <input  class="form-control" type="password" id="current_pwd" name="current_pwd">
                    </div>
                    <div class="form-group">
                        <label for="new_pwd">New Password</label>
                        <input class="form-control" type="password" id="new_pwd" name="new_pwd">
                    </div>
                    <div class="form-group">
                        <label for="confirm-new-password">Confirm New Password</label>
                        <input  class="form-control" type="password" id="confirm_new_pwd" name="confirm_new_pwd">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-default" type="submit" value="Change Password" />
                    </div>
                </form>
            </section>
        </div>
    </div>
</section>


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
                    error: function(jqXHR, textStatus, errorThrown) {

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








