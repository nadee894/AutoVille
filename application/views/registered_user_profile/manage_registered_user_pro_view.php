<section>
    <div class="row">
        <div class="col-md-9 col-sm-9" id="details_">
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
                                        <select name="title">
                                            <?php
                                            $titles = array("Mr.", "Mrs.", "Ms.");
                                            foreach ($titles as $title) {
                                                if ($title == $user->title) {
                                                    echo '<option selected value="' . $title . '">' . $title . '</option>';
                                                } else {
                                                    echo '<option value="' . $title . '">' . $title . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name <span style="color: red;">*</span></label>
                                        <input required id="name" class="form-control" type="text" value="<?php echo $user->name; ?>" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="contact_no_1">Contact 1 <span style="color: red;">*</span></label>
                                        <input required class="form-control" type="phone" value="<?php echo $user->contact_no_1; ?>" id="contact_no_1" name="contact_no_1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="contact_no_2">Contact 2</label>
                                        <input class="form-control" type="phone" value="<?php echo $user->contact_no_2; ?>" id="contact_no_2" name="contact_no_2">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red;">*</span></label>
                                        <input required id="email" class="form-control" type="email" value="<?php echo $user->email; ?>" name="email">
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
                            <input type="submit" class="btn btn-large btn-default" value="Save Changes" />
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-9">


            <section>
                <h3>
                    <i class="fa fa-asterisk"></i>
                    Password Change
                </h3>
                <form id="form-password" class="framed" method="post" role="form">
                    <div class="form-group">
                        <label for="current_pwd">Current Password</label>
                        <input required class="form-control" type="password" id="current_pwd" name="current_pwd">
                    </div>
                    <div class="form-group">
                        <label for="new_pwd">New Password</label>
                        <input required class="form-control" type="password" id="new_pwd" name="new_pwd">
                    </div>
                    <div class="form-group">
                        <label for="confirm-new-password">Confirm New Password</label>
                        <input required class="form-control" type="password" id="confirm_new_pwd" name="confirm_new_pwd">
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

            function showNotification(msg){
            a = ` <div class = "notification_216" style = "
                    position: fixed;
                    bottom: 10px;
                    left: 10px;
                    border: black solid 2px;
                    border - radius: 10px;
                    padding: 10px;
                    font - size: 22px;
                    ">`+msg+`</div>`;
                    $("#details_").prepend(a);
                    setTimeout(function(){ $(".notification_216").fadeOut(function(){ $(this).remove(); }); }, 3000);
            }
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

                    showNotification("Successfully Updated")
                            toastr.success("Successfully Updated", "AutoVille");
                    }
                    else{
                    showNotification("Error!")
                            toastr.error("Error!!", "AutoVille");
                    }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    showNotification("Error!")
                            toastr.error("Error!!", "AutoVille");
                    }
            });
            //$("#edit_reg_user_profile_form").submit(); //Submit  the FORM
    }

    function submitPasswordForm() {
    var postData = $("#form-password").serializeArray();
            var formURL = site_url + '/reg_user_profile/update_reg_user_profile_password';
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

                    showNotification("Successfully Updated")
                            toastr.success("Successfully Updated", "AutoVille");
                    }
                    else{
                    showNotification("Error!")
                            toastr.error("Error!!", "AutoVille");
                    }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    showNotification("Error!")
                            toastr.error("Error!!", "AutoVille");
                    }
            });
            //$("#edit_reg_user_profile_form").submit(); //Submit  the FORM
    }

    var password = document.getElementById("new_pwd")
            , confirm_password = document.getElementById("confirm_new_pwd");
            function validatePassword(){
            if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
            confirm_password.setCustomValidity('');
            }
            }

    password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
            $(document).ready(function() {

    $('#form-password').submit(function(event){
    // cancels the form submission
    event.preventDefault();
            submitPasswordForm();
            // do whatever you want here
    });
            $('#edit_reg_user_profile_form').submit(function(event){
    // cancels the form submission
    event.preventDefault();
            submitForm();
            // do whatever you want here
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








