<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Manufacture Quick edit</h4>
</div>

<form id="add_manufacture_form" name="add_manufacture_form" method="post">
    <div class="modal-body">
        <script src="<?php echo base_url(); ?>backend_resources/file_upload_plugin/ajaxupload.3.5.js" type="text/javascript"></script>
        <script>
            //upload manufacture logo

            $(function() {
                var btnUpload = $('#upload');
                var status = $('#status');
                new AjaxUpload(btnUpload, {
                    action: '<?php echo site_url(); ?>/manufacture/upload_manufacture_logo',
                    name: 'uploadfile',
                    onSubmit: function(file, ext) {
                        if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                            // extension is not allowed 
                            status.text('Only JPG, PNG or GIF files are allowed');
                            return false;
                        }
                        //status.text('Uploading...Please wait');
                        //                                            $("#files").html("<i id='animate-icon' class='fa fa-spinner fa fa-2x fa-spin'></i>");

                    },
                    onComplete: function(file, response) {
                        //On completion clear the status
                        //status.text('');
                        $("#files").html("");
                        $("#sta").html("");
                        //Add uploaded file to list
                        if (response != "error") {
                            $('#files').html("");
                            $('<div></div>').appendTo('#files').html('<img src="<?php echo base_url(); ?>uploads/manufacture_logo/' + response + '"   width="100px" height="68px" /><br />');
                            picFileName = response;
                            document.getElementById('logo').value = response;
                            //                    document.getElementById('cover_image').value = response;
                        } else {
                            $('<div></div>').appendTo('#files').text(file).addClass('error');
                        }
                    }
                });

            });


        </script>
        <div class="form-group">
            <label for="name">Manufacture<span class="mandatory">*</span></label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $manufacture->name; ?>">
            <input id="manufacture_id"  name="manufacture_id" type="hidden" value="<?php echo $manufacture->id; ?>">
<!--            <input id="name" class="form-control" name="name" type="text" placeholder="Enter Manufacture">-->
        </div>
        <div class="form-group">
            <div id="upload">

                <label class="form-label">Upload Logo</label>
                <button type="button" class="btn btn-info" id="browse">Browse</button>
                <input type="text" id="logo" name="logo" style="visibility: hidden" value=""/>
            </div>
            <div id="sta"><span id="status" ></span></div>
        </div>

        <div class="form-group">
            <div id="files" class="project-logo">
            </div>
        </div>
    </div>
    <span id="rtn_msg_edit"></span>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>
<!--<form id="edit_manufacture_form" name="edit_manufacture_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Manufacture</label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $manufacture->name; ?>">
            <input id="manufacture_id"  name="manufacture_id" type="hidden" value="<?php echo $manufacture->id; ?>">
            <input id="manufacture_logo" name="manufacture_logo" type="text" value="<?php echo $manufacture->logo; ?>"
        </div>
        <span id="rtn_msg_edit"></span>
    </div>
    
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>-->

<script type="text/javascript">
    //edit manufacture form validation
    $("#edit_manufacture_form").validate({
        rules: {
            name: "required"
        },
        message: {
            name: "Please enter a Manufacturer"
        }, submitHandler: function(form)
        {
            $.post(site_url + '/manufacture/edit_manufacture', $('#edit_manufacture_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $('#rtn_msg').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');
                    window.location = site_url + '/manufacture/manage_manufactures';
                } else {
                    $('#rtn_msg').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');
                }
            });
        }
    });
</script>

