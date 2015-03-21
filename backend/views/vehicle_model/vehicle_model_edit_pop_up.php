<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Vehicle Model Quick Edit</h4>
</div>
<form id="edit_vehicle_model_form" name="edit_vehicle_model_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Vehicle Model<span class="mandatory">*</span></label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $vehicle_model->name; ?>">
            <input id="vehicle_model_id"  name="vehicle_model_id" type="hidden" value="<?php echo $vehicle_model->id; ?>">
        </div>
        <span id="rtn_msg_edit"></span>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>

<script type="text/javascript">

    $("#edit_vehicle_model_form").validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter a Vehicle Model"
        }, submitHandler: function (form) {

            $.post(site_url + '/vehicle_model/edit_vehicle_model', $('#edit_vehicle_model_form').serialize(), function (msg)
            {
                if (msg == 1) {
                    $('#rtn_msg_edit').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');
                    window.location = site_url + '/vehicle_model/manage_models';
                } else {
                    $('#rtn_msg_edit').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');
                }
            });
        }

    });

</script>