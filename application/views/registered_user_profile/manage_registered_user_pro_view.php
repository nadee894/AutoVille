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
            <form id="edit_reg_user_profile_form" role="form" method="post" >
                <div class="tab-content">


                    <div id="personalinfo" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Title</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->title; ?>" id="title" name="title">
                                        <!--<input name="name" type="text" class="form-control" id="name" placeholder=" " value="<?php echo $user->name; ?>">-->
                                    </div>
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->name; ?>" id="name" name="name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->email; ?>" id="email" name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->address; ?>" id="address" name="address">
                                    </div>
                                </div>                                                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Contact number 1</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->contact_no_1; ?>" id="contact_no_1" name="contact_no_1">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Contact number 2</label>
                                        <input class="form-control" type="text" required="" placeholder="" value="<?php echo $user->contact_no_2; ?>" id="contact_no_2" name="contact_no_2">
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
                                        <input class="form-control" type="password" placeholder="" id="new_pwd" name="new_pwd">
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
                <button type="button" id="saveBtn" type="submit" class="btn btn-success">Update Details</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </form>
        </div>
    </div>
</div>

    <script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>

    <script type="text/javascript">
        function submitForm(){
            var postData = $("#edit_reg_user_profile_form").serializeArray();
            var formURL = site_url + '/reg_user_profile/update_reg_user_profile';
            //alert(formURL); 


            $.ajax(
            {
                url : formURL,
                type: "POST",
                data : postData,
                success:function(data, textStatus, jqXHR) 
                {
                    //alert(data + ">>" + textStatus);
                    if(data=="SUCCESS"){
                        toastr.success("Successfully Updated", "AutoVille");
                    }
                    else
                        toastr.error("Error!!", "AutoVille");
                    
                },
                error: function(jqXHR, textStatus, errorThrown) 
                {
                    //alert(">>" + errorThrown);
                    toastr.error("Error!!", "AutoVille");
                }
            });
            //$("#edit_reg_user_profile_form").submit(); //Submit  the FORM
        }
        
        $(document).ready(function() {

            $('#saveBtn').click(function() {
                //var validator = $("#edit_reg_user_profile_form").validate();
                //validator.resetForm();
                
                
                submitForm();
                
            });
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








