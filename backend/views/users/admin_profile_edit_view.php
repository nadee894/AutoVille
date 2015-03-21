<h1> Profile Info</h1>
<form id="user_details" class="form-horizontal" role="form" method="POST" name="user_details">
    <div class="form-group">
        <label  class="col-lg-2 control-label">About Me</label>
        <div class="col-lg-10">
            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">Title</label>
        <div class="col-lg-6">
            <input name="title" type="text" class="form-control" id="title" placeholder=" ">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">Name</label>
        <div class="col-lg-6">
            <input name="name" type="text" class="form-control" id="name" placeholder=" ">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">User Name</label>
        <div class="col-lg-6">
            <input name="user_name" type="text" class="form-control" id="username" placeholder=" ">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">User Type</label>
        <div class="col-lg-6">
            <input name="user_type" type="text" class="form-control" id="type" placeholder=" ">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">E-mail</label>
        <div class="col-lg-6">
            <input name="email" type="text" class="form-control" id="email" placeholder=" ">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">Address</label>
        <div class="col-lg-6">
            <input name="address" type="text" class="form-control" id="address" placeholder=" ">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">Contact No 01</label>
        <div class="col-lg-6">
            <input name="contact_no_1" type="text" class="form-control" id="mobile1" placeholder=" ">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-lg-2 control-label">Contact No 02</label>
        <div class="col-lg-6">
            <input name="contact_no_2" type="text" class="form-control" id="mobile2" placeholder=" ">
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit"  class="btn btn-success">Save</button>
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
    </div>
</form>
<section>
    <div class="panel panel-primary">
        <div class="panel-heading"> Sets New Password & Avatar</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label  class="col-lg-2 control-label">Current Password</label>
                    <div class="col-lg-6">
                        <input name="c_password" type="password" class="form-control" id="c-pwd" placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-lg-2 control-label">New Password</label>
                    <div class="col-lg-6">
                        <input name="" type="password" class="form-control" id="n-pwd" placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-lg-2 control-label">Re-type New Password</label>
                    <div class="col-lg-6">
                        <input name="n_pasword" type="password" class="form-control" id="rt-pwd" placeholder=" ">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-lg-2 control-label">Change Avatar</label>
                    <div class="col-lg-6">
                        <input name="profile_pic" type="file" class="file-pos" id="exampleInputFile">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-info">Save</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script type="text/javascript">

   $(document).ready(function () {
    
        $("#user_details").validate({
            rules: {
                title: "required",
                name: "required",
                user_name: "required",
                user_type: "required",
                email: "required",
                address: "required",
                contact_no_1: "required",
                contact_no_2: "required"
            }, messages: {
                title: "Please enter a title",
                name: "Please enter a name",
                user_name: "Please enter a user name",
                user_type: "Please enter a user type",
                email: "Please enter a email",
                address: "Please enter a address",
                contact_no_1: "Please enter a contact number",
                contact_no_2: "Please enter a contact number"
            }, submitHandler: function (form)
            {
                $.post(site_url + '/user/update_user', $('#user_details').serialize(), function (msg)
                {
                    if (msg == 1) {
//                        window.location = site_url + '/user/manage_admins';
                    } else {

                    }
                });


            }
        });
    });
</script>