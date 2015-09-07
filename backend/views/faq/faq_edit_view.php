<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">FAQ Edit Answer</h4>
</div>
<form id="faq_type_form" name="faq_type_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">FAQs<span class="mandatory">*</span></label>
            <input id="answer" class="form-control" name="answer" type="text" value="<?php echo $faq->answer; ?>">
            <input id="faq_id"  name="faq_id" type="hidden" value="<?php echo $faq->id; ?>">
        </div>
        <span id="rtn_msg_edit"></span>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>

<script type="text/javascript">

    //edit body type form validation
    $("#edit_FAQ_type_form").validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter the Answer"
        }, submitHandler: function (form)
        {
            $.post(site_url + '/body_type/update_body_types', $('#edit_FAQ_type_form').serialize(), function (msg)
            {
                if (msg == 1) {
                    $('#rtn_msg_edit').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully Updated!!.</strong></div>');

                    window.location = site_url + '/body_type/manage_body_types';
                } else {
                    $('#rtn_msg_edit').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');

                }
            });


        }
    });
</script>